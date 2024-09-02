<?php

namespace Database\Seeders\belajar\database\manytomany;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\manytomany\tagmanytomany as tag;

class tagmanytomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tag::create([
            'name' => 'Tag 1',
        ]);
        tag::create([
            'name' => 'Tag 2',
        ]);
    }
}
