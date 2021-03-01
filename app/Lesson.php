<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $table = 'lessons';

    protected $fillable = [
        'id',
        'title',
        'text',
        'price',
        'date',
        'url',
        'pass',
        'photo',
        'video',
        'teachers_id',
        'teachers_name',
        'teachers_photo',
        'navis_id',
        'navis_name',
        'navis_photo',
        'created_at',
        'updated_at',
    ];


}
