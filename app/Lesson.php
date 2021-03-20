<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $table = 'lessons';

    protected $fillable = [
        'id',
        'lessons_title',
        'lessons_text',
        'lessons_price',
        'lessons_date',
        'lessons_week',
        'lessons_url',
        'lessons_pass',
        'lessons_photo',
        'lessons_video',
        'teachers_id',
        'navis_id',
        'created_at',
        'updated_at',
    ];


}
