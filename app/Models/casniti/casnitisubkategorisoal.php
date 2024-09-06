<?php

namespace App\Models\casniti;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casnitisubkategorisoal extends Model
{
    use HasFactory;

    protected $table = 'casnitisubkategorisoals';
    protected $fillable = ['subkategorisoal', 'casnitikategorisoal_id'];

    public function kategorisoal()
    {
        return $this->belongsTo(casnitikategorisoal::class, 'casnitikategorisoal_id', 'id');
    }

    public function soal()
    {
        return $this->hasMany(casnitisoal::class, 'casnitisubkategorisoal_id', 'id');
    }
}
