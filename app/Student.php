<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

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
