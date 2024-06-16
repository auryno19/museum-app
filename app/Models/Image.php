<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';

    protected $fillable = [
        'filepath',
        'sequence',
        'id_collection',
        'id_event',
    ];

    public function Collection()
    {
        return $this->belongsTo(Collection::class, 'id_collection');
    }
    public function Event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
}
