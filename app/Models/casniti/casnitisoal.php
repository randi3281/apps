<?php

namespace App\Models\casniti;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casnitisoal extends Model
{
    use HasFactory;

    protected $table = 'casnitisoals';
    protected $fillable = ['soal', 'casnitisubkategorisoal_id'];

    public function subkategorisoal()
    {
        return $this->belongsTo(casnitisubkategorisoal::class, 'casnitisubkategorisoal_id', 'id');
    }

}
