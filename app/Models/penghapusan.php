<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghapusan extends Model
{
    use HasFactory;
    protected $table = 'penghapusan';

    protected $fillable = [
        'tanggal_perolehan',
        'asset',
        'kode_fa_fams',
        'nama_barang',
        'acquis_val',
        'accum_dep',
        'book_val',
        'outlet_pencatatan',
        'outlet_actual',
        'type_barang',
        'location',
        'jabatan',
        'nama_user',
        'nik',
        'komputer_nama',
        'ip_address',
        'kondisi',
        'keterangan',
        'serial_number',
        'sophos',
        'landesk',
        'bulan',
        'tahun',
        'area_user'
    ];
}
