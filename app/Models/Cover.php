<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $table = 'covers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_id',
        'title_eng',
        'path',
    ];

    public function Collection()
    {
        return $this->hasMany(Collection::class, 'id_cover');
    }
}
