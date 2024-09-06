<?php

namespace App\Models\belajar\database\manytomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postmanytomany extends Model
{
    use HasFactory;
    public function tagmanytomany()
    {
        return $this->belongsToMany(tagmanytomany::class, 'postmanytomany_tagmanytomany', 'postmanytomany_id', 'tagmanytomany_id')
                ->using(postmanytomany_tagmanytomany::class);
    }
}
