<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';

    protected $fillable = [
        'id',
        'notices_title',
        'notices_text',
        'notices_flag',
        'created_at',
        'updated_at',
    ];
}
