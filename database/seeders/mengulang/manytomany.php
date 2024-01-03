<?php

namespace Database\Seeders\mengulang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class manytomany extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('anggotas')->insert([
                'nama' => $faker->name
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('hadiahs')->insert([
                'nama_hadiah' => $faker->name
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            DB::table('anggota_hadiahs')->insert([
                'anggota_id' => $faker->numberBetween(1, 10),
                'hadiah_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
