<?php

namespace Database\Seeders\belajar\database\onetomany;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\onetomany\commentonetomany as Comment;
use App\Models\belajar\database\onetomany\postonetomany as Post;

class commentonetomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::all()->each(function ($post) {
            Comment::factory()
                ->count(5)
                ->for($post)
                ->create();
        });
    }
}
