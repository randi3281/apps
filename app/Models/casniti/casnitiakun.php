<?php

namespace App\Models\casniti;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casnitiakun extends Model
{
    use HasFactory;

    protected $table = 'casnitiakuns';
    protected $fillable = ['nama', 'email'];

    public function history()
    {
        return $this->hasMany(casnitihistory::class, 'casnitiakun_id', 'id');
    }

}
