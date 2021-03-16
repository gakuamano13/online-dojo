<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navi extends Model
{
    protected $table = 'navis';

    protected $fillable = [
        'navis_id',
        'navis_name',
        'navis_email',
        'navis_flag',
        'navis_login_id',
        'navis_pass',
        'navis_tel',
        'navis_photo',
        'created_at',
        'updated_at',
    ];
}
