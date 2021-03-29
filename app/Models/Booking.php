<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'id',
        'bookings_students_id',
        'bookings_datetime',
        'bookings_lessons_id',
        'bookings_courses_id',
        'bookings_flag',
        'created_at',
        'updated_at',
    ];
}
