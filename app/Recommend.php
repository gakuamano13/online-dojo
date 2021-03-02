<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $table = 'recommends';

    protected $fillable = [
        'id',
        'lessons_id',
        'title',
        'text',
        'flag',
        'created_at',
        'updated_at',
    ];
}
