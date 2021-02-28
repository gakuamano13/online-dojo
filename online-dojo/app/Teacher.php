<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'id',
        'name',
        'email',
        'flag',
        'login_id',
        'pass',
        'tel',
        'photo',
        'created_at',
        'updated_at',
    ];
}
