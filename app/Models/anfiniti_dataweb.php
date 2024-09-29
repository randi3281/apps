<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Contracts\Translation\TranslatorTrait;

class anfiniti_dataweb extends Model
{
    use SoftDeletes;
    protected $table = 'anfiniti_dataweb';
    protected $fillable = ['nama_web', 'link', 'gambar', 'login_id'];
    protected $dates = ['deleted_at'];

    public function login()
    {
        return $this->belongsTo(anfiniti_login::class, 'login_id');
    }
}
