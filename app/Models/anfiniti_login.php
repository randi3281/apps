<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anfiniti_login extends Model
{
    protected $table = 'anfiniti_login';
    protected $fillable = ['username', 'password', 'posisi'];

    public function session()
    {
        return $this->hasMany(anfiniti_session::class, 'login_id');
    }

    public function dataweb()
    {
        return $this->hasMany(anfiniti_dataweb::class, 'login_id');
    }

    public function transaction()
    {
        return $this->hasMany(anfiniti_transaction::class, 'login_id');
    }
}
