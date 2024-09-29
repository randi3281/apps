<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anfiniti_transaction extends Model
{

    protected $table = 'anfiniti_transaction';
    // buatlah fillable
    protected $fillable = ['login_id', 'price', 'status', 'snap_token'];

    public function logintransaction()
    {
        return $this->belongsTo(anfiniti_login::class, 'login_id');
    }
}
