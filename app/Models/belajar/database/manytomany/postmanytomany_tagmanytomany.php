<?php

namespace App\Models\belajar\database\manytomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class postmanytomany_tagmanytomany extends Pivot
{
    use HasFactory;
    protected $table = 'postmanytomany_tagmanytomany';
    protected $fillable = [
        'postmanytomany_id',
        'tagmanytomany_id',
    ];
}
