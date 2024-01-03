<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\mengulang\perpustakaan;

class perpustakaanController extends Controller
{
    public function index()
    {
        // mengambil data perpustakaan
        // $perpustakaan = perpustakaan::all();
        // $perpustakaan = perpustakaan::paginate(10);
        $firstdata = perpustakaan::first();

        // nyari data yang id nya 1
        $finddata = perpustakaan::find(1);

        // nyari data yang namanya 
        $queryfind = perpustakaan::where('nama', 'like', '%suwarno%')->get();

        // data yang idnya lebih dari 5 kita paginate
        // $perpustakaan = perpustakaan::where('id', '>', 5)->paginate(10);
        $perpustakaan = perpustakaan::where('id', '>=', 6)->paginate(10);

        return view('mengulang.perpustakaan.index', ['perpustakaan' => $perpustakaan, 'no' => 1, 'firstdata' => $firstdata, 'finddata' => $finddata, 'queryfind' => $queryfind]);
    }
}
