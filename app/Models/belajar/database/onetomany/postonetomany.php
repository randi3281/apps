<?php

namespace App\Models\belajar\database\onetomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postonetomany extends Model
{
    use HasFactory;
    public function commentonetomany()
    {
        return $this->hasMany(commentonetomany::class);
    }
}
