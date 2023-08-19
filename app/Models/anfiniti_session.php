<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anfiniti_session extends Model
{
    protected $table = 'anfiniti_session';
    // buatlah fillable
    protected $fillable = ['sesi', 'username', 'login_id'];

    public function login()
    {
        return $this->belongsTo(AnfinitiLogin::class, 'login_id');
    }
}
