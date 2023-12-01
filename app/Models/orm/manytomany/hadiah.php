<?php

namespace App\Models\orm\manytomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hadiah extends Model
{
    protected $table = 'hadiahs';
    
    public function anggota()
    {
        return $this->belongsToMany(anggota::class);
    }   
}
