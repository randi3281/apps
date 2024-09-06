<?php

namespace Database\Seeders\belajar\database\zpost;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belajar\database\manytomany\tagmanytomany as tag;
use App\Models\belajar\database\manytomany\postmanytomany as post;
class posttagmanytomanyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = post::all();
        $tag = tag::all();
        $post[0]->tagmanytomany()->attach($tag[0]->id);
        $post[0]->tagmanytomany()->attach($tag[1]->id);
        $post[1]->tagmanytomany()->attach($tag[0]->id);
        $post[1]->tagmanytomany()->attach($tag[1]->id);
    }
}
