<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table = 'helps';

    protected $fillable = [
        'id',
        'title',
        'text',
        'flag',
        'created_at',
        'updated_at',
    ];
}
