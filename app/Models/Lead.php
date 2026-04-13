<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    const STATUS_NEW       = 'new';
    const STATUS_CONTACTED = 'contacted';
    const STATUS_SUCCESS   = 'success';
    const STATUS_CLOSED    = 'closed';

    const STATUSES = [
        self::STATUS_NEW       => 'Nowy',
        self::STATUS_CONTACTED => 'Kontakt',
        self::STATUS_SUCCESS   => 'Sukces',
        self::STATUS_CLOSED    => 'Zamknięty',
    ];

    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'use_case',
        'message',
        'consent',
        'ip_address',
        'excel_file',
        'status',
    ];

    protected $casts = [
        'consent' => 'boolean',
    ];

    protected $attributes = [
        'status' => self::STATUS_NEW,
    ];
}
