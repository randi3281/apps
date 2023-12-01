<?php

namespace Database\Seeders\mengulang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class onetooneseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            // insert data ke table pengguna menggunakan Faker
            DB::table('pengguna')->insert([
                'nama' => $faker->name,
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            // insert data ke table telepon menggunakan Faker
            DB::table('telepon')->insert([
                'nomor_telepon' => $faker->phoneNumber,
                'pengguna_id' => $faker->unique()->numberBetween(1, 10),
            ]);
        }
    }
}
