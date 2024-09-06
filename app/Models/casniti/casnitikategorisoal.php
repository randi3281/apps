<?php

namespace App\Models\casniti;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casnitikategorisoal extends Model
{
    use HasFactory;

    protected $table = 'casnitikategorisoals';
    protected $fillable = ['kategori'];

    public function subkategorisoal()
    {
        return $this->hasMany(casnitisubkategorisoal::class, 'casnitikategorisoal_id', 'id');
    }
}
