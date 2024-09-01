<?php

namespace App\Http\Controllers\belajar\database\onetomany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\belajar\database\onetomany\postonetomany as post;
use App\Models\belajar\database\onetomany\commentonetomany as comment;

class indexController extends Controller
{
    public function indexpakaipost()
    {
        $post = post::all();
        return view('belajar.database.onetomany.indexpakaipost', compact('post'));
    }

    public function indexpakaicomment()
    {
        $comment = comment::all();
        return view('belajar.database.onetomany.indexpakaicomment', compact('comment'));
    }
}
