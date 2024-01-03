<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BelajarLoginMiddleware extends Model
{
    protected $table = 'belajarloginmiddleware';

    protected $fillable = [
        'username',
        'password',
    ];
}
