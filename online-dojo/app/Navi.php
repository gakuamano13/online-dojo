<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navi extends Model
{
    protected $table = 'navis';

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
