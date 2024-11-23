<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('characters')->insert([
            ['name' => 'Abrams', 'image' => 'characters/abrams.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bebop', 'image' => 'characters/bebop.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dynamo', 'image' => 'characters/dynamo.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Grey Talon', 'image' => 'characters/greytalon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Haze', 'image' => 'characters/haze.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Infernus', 'image' => 'characters/inf.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ivy', 'image' => 'characters/ivy.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Kelvin', 'image' => 'characters/kelvin.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lady Geist', 'image' => 'characters/ladygeist.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lash', 'image' => 'characters/lash.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'McGinnis', 'image' => 'characters/mcginnis.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mirage', 'image' => 'characters/mirage.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mo & Krill', 'image' => 'characters/mokrill.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paradox', 'image' => 'characters/paradox.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pocket', 'image' => 'characters/pocket.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Seven', 'image' => 'characters/seven.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Shiv', 'image' => 'characters/shiv.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Vindicta', 'image' => 'characters/vindicta.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Viscous', 'image' => 'characters/viscous.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Warden', 'image' => 'characters/warden.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Wraith', 'image' => 'characters/wraith.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Yamato', 'image' => 'characters/yamat.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
