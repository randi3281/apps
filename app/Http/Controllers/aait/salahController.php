<?php

namespace App\Http\Controllers\aait;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\user_manajemen;
use App\Helper\jurnalhelper;

class salahController extends Controller
{

    public function salahlogin()
    {
        return redirect()->route('aait.index');
    }
    public function salahweb($salahweb)
    {
        return redirect()->route('aait.index');
    }

}
