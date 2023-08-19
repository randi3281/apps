<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anfiniti_dataweb extends Model
{
    protected $table = 'anfiniti_dataweb';
    // buatlah fillable
    protected $fillable = ['nama_web', 'link', 'gambar', 'login_id'];

    public function login()
    {
        return $this->belongsTo(AnfinitiLogin::class, 'login_id');
    }
}
