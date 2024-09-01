<?php

namespace App\Http\Controllers\belajar\database\onetoone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\belajar\database\onetoone\useronetoone as Users;
use App\Models\belajar\database\onetoone\profileonetoone as Profiles;

class indexController extends Controller
{
    public function indexpakaiprofile()
    {
        $profile = Profiles::all();
        return view('belajar.database.onetoone.indexpakaiprofile', compact('profile'));
    }

    public function indexpakaiuser()
    {
        $user = Users::all();
        return view('belajar.database.onetoone.indexpakaiuser', compact('user'));
    }
}
