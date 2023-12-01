<?php

namespace App\Models\orm\onetoone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';

    public function telepon()
    {
        return $this->hasOne('App\Models\orm\onetoone\telepon');
    }
}
