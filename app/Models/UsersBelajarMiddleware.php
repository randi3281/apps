<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsersBelajarMiddleware extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Nama tabel yang terkait dengan model ini.
     *
     * @var string
     */
    protected $table = 'usersbelajarmiddleware';

    /**
     * Primary key tabel ini.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Tipe primary key.
     *
     * @var string
     */

    /**
     * Indikasi apakah primary key auto-increment.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indikasi apakah timestamps digunakan.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'remember_token',
        'email_verified_at',
    ];

    /**
     * Kolom yang di-hidden dalam array atau JSON.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Tipe data yang harus di-cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'string',
    ];

    /**
     * Default role untuk user baru.
     *
     * @return string
     */
    public function getDefaultRoleAttribute()
    {
        return 'mahasiswa';
    }
}
