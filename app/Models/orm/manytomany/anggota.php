<?php

namespace App\Models\orm\manytomany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'anggotas';
    
    public function hadiah()
    {
        return $this->belongsToMany(hadiah::class);
    }
}
