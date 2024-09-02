<?php

namespace App\Http\Controllers\belajar\database\manytomany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\belajar\database\manytomany\postmanytomany as postmanytomany;
use App\Models\belajar\database\manytomany\tagmanytomany as tagmanytomany;
use App\Models\belajar\database\manytomany\postmanytomany_tagmanytomany as posttagmanytomany;

class indexController extends Controller
{
    public function indexpakaipost()
    {
        // $postmanytomany = postmanytomany::all();
        $postmanytomany = postmanytomany::whereHas('tagmanytomany')->get();
        return view('belajar.database.manytomany.indexpakaipost', compact('postmanytomany'));
    }

    public function indexpakaitag()
    {
        $tagmanytomany = tagmanytomany::all();
        return view('belajar.database.manytomany.indexpakaitag', compact('tagmanytomany'));
    }

    public function indexpakaiposttag()
    {
        // $posttagmanytomany = posttagmanytomany::all();
        // $posttagmanytomany = postmanytomany::with(['tagmanytomany'])->get();
        $posttagmanytomany = postmanytomany::whereHas('tagmanytomany')->with(['tagmanytomany'])->get();
        return view('belajar.database.manytomany.indexpakaiposttag', compact('posttagmanytomany'));
    }
}
