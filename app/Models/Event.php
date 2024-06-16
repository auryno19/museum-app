<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_id',
        'title_eng',
        'date',
        'deskripsi_id',
        'deskripsi_eng',
        // 'image',
    ];

    public function Image()
    {
        return $this->hasMany(Image::class, 'id_event');
    }
}
