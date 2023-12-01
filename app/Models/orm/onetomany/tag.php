<?php

namespace App\Models\orm\onetomany;

use Illuminate\Database\Eloquent\FacWWtories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function artikel()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }

}
