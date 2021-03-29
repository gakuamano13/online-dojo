<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'id',
        'teachers_name',
        'teachers_email',
        'teachers_flag',
        'teachers_login_id',
        'teachers_pass',
        'teachers_tel',
        'teachers_photo',
        'created_at',
        'updated_at',
    ];
}
