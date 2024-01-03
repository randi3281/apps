<?php

namespace App\Models\orm\onetomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function tag()
    {
        return $this->hasMany('App\Models\orm\onetomany\tag');
    }
}
