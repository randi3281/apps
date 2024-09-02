<?php

namespace App\Models\belajar\database\manytomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagmanytomany extends Model
{
    use HasFactory;
    public function postmanytomany()
    {
        return $this->belongsToMany(postmanytomany::class, 'postmanytomany_tagmanytomany')
                ->using(posttagmanytomany::class);
    }
}
