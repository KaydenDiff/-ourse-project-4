<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['role_code' => 'user', 'role_name' => 'User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['role_code' => 'admin', 'role_name' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
