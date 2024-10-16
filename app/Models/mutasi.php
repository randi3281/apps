<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mutasi extends Model
{
    use HasFactory;
    protected $table = 'mutasi';

    protected $fillable = [
        'tanggal_perolehan',
        'asset',
        'kode_fa',
        'nama_barang',
        'outlet_actual',
        'type_barang',
        'location',
        'jabatan',
        'user_domain',
        'nik',
        'komputer_nama',
        'ip_address',
        'kondisi',
        'keterangan',
        'serial_number',
        'sophos',
        'landesk',
        'mutasi_asal',
        'mutasi_tujuan',
        'keterangan_mutasi',
        'bulan',
        'tahun',
        'area_user'
    ];
}
