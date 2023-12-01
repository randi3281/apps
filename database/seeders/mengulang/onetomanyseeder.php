<?php

namespace Database\Seeders\mengulang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class onetomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'judul' => $faker->sentence(6),
            ]);
        }

        for ($i = 0; $i < 30; $i++) {
            DB::table('tags')->insert([
                'tag' => $faker->sentence(1),
                'article_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
