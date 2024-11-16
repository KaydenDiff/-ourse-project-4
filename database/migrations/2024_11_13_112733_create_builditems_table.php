<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('builditems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')->constrained('builds')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('item_id')->constrained('items')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('part_id')->constrained('parts')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builditems');
    }
};
