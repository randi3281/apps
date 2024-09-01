<?php

namespace App\Models\belajar\database\onetoone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\belajar\database\onetoone\profileonetoone;

class useronetoone extends Model
{
    public function profileonetoone()
    {
        return $this->hasOne(profileonetoone::class);
    }
}
