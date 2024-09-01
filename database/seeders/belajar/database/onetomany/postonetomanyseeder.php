<?php

namespace Database\Seeders\belajar\database\onetomany;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\onetomany\postonetomany as Post;

class postonetomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()
            ->count(10)
            ->create();
    }
}
