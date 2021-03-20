<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table = 'helps';

    protected $fillable = [
        'id',
        'helps_title',
        'helps_text',
        'helps_flag',
        'created_at',
        'updated_at',
    ];
}
