<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collections';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_id',
        'title_eng',
        'desc_id',
        'desc_eng',
        'id_cover'
    ];

    public function Image()
    {
        return $this->hasMany(Image::class, 'id_collection');
    }

    public function Cover()
    {
        return $this->belongsTo(Cover::class, 'id_cover');
    }
}
