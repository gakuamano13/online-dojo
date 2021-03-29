<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navi extends Model
{
    protected $table = 'navis';

    protected $fillable = [
        'id',
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
