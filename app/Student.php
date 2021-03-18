<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'id',
        'students_name',
        'students_email',
        'students_flag',
        'students_login_id',
        'students_pass',
        'students_tel',
        'students_photo',
        'created_at',
        'updated_at',
    ];
}
