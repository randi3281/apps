<?php

namespace App\Models\belajar\database\onetomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentonetomany extends Model
{
    use HasFactory;
    public function postonetomany()
    {
        return $this->belongsTo(postonetomany::class);
    }
}
