<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AdminNotification extends Model
{
    protected $table = 'admin_notifications';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        parent::booted();
        self::creating(function (self $model): void {
            // UUID未指定時は自動生成
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }
}
