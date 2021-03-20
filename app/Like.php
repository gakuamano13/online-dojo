<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'id',
        'likes_students_id',
        'likes_teachers_id',
        'likes_navis_id',
        'likes_lessons_id',
        'likes_courses_id',
        'likes_flag',
        'created_at',
        'updated_at',
    ];
}
