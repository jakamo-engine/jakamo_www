<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'use_case',
        'message',
        'consent',
        'ip_address',
    ];

    protected $casts = [
        'consent' => 'boolean',
    ];
}
