<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'id',
        'courses_date',
        'courses_time',
        'courses_week',
        'courses_lessons_id',
        'courses_flag',
        'created_at',
        'updated_at',
    ];
}
