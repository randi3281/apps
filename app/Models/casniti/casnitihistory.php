<?php

namespace App\Models\casniti;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casnitihistory extends Model
{
    use HasFactory;

    protected $table = 'casnitihistories';
    protected $fillable = ['casnitiakun_id', 'tanggal', 'paket', 'jenis1', 'nilai1', 'jenis2', 'nilai2', 'jenis3', 'nilai3', 'jenis4', 'nilai4'];

    public function akun()
    {
        return $this->belongsTo(casnitiakun::class, 'casnitiakun_id', 'id');
    }
}
