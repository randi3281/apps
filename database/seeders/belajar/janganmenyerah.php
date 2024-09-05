<?php

namespace Database\Seeders\belajar;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class janganmenyerah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('janganmenyerahs')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
