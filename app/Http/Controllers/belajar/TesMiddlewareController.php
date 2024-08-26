<?php

namespace App\Http\Controllers\belajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesMiddlewareController extends Controller
{
    public function about()
    {
        return 'Ini adalah halaman about';
    }

    public function product()
    {
        return 'Ini adalah halaman product';
    }

    public function cart()
    {
        return 'Ini adalah halaman cart';
    }

    public function order()
    {
        return 'Ini adalah halaman order';
    }
}
