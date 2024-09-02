<?php

namespace Database\Seeders\belajar\database\manytomany;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\manytomany\postmanytomany as post;

class postmanytomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        post::create([
            'title' => 'Post 1',
            'body' => 'Body Post 1',
        ]);
        post::create([
            'title' => 'Post 2',
            'body' => 'Body Post 2',
        ]);
    }
}
