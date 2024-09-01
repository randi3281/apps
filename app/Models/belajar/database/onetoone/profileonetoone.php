<?php

namespace App\Models\belajar\database\onetoone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\belajar\database\onetoone\useronetoone;

class profileonetoone extends Model
{
    public function useronetoone()
    {
        return $this->belongsTo(useronetoone::class);
    }
}
