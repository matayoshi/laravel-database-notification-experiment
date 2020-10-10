<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    protected $table = 'admin_notifications';

    protected $guards = [];

    protected $casts = [
        'read_at' => 'datetime',
    ];
}
