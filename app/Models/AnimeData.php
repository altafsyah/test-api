<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeData extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function animeDesc()
    {
        return $this->belongsTo(AnimeDesc::class);
    }
}
