<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    protected $table = 'user_notifications';

    protected $guards = [];

    protected $casts = [
        'read_at' => 'datetime',
    ];
}
