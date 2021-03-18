<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $table = 'recommends';

    protected $fillable = [
        'id',
        'recommends_lessons_id',
        'recommends_title',
        'recommends_text',
        'recommends_flag',
        'created_at',
        'updated_at',
    ];
}
