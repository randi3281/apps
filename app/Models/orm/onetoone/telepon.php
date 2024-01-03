<?php

namespace App\Models\orm\onetoone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    protected $table = 'telepon';

    public function pengguna()
    {
        return $this->belongsTo('App\Models\orm\onetoone\pengguna');
    }
}
