<?php

namespace App\Models\mengulang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class rpegawai extends Model
{
    use SoftDeletes;
    protected $table = 'rpegawai';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'alamat'];
}
