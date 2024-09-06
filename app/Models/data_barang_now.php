<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_barang_now extends Model
{
    use HasFactory;

    protected $table = 'data_barang_now';
    protected $fillable = [
        'tanggal_perolehan',
        'asset',
        'kode_fa_fams',
        'nama_barang',
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
        'capex_or_selisih',
        'area_user'
    ];
}
