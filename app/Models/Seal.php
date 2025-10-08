<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seal extends Model
{
    protected $fillable = [
        'user_id',
        'number', 'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sealRegisters(): HasMany
    {
        return $this->hasOne(SealRegister::class);
    }

    public function getPositionAttribute()
    {
        return $this->rmsInstallDetails;
    }

    public function task()
    {
        return $this->hasOneThrough(
            Task::class,              // final model
            RmsInstallDetail::class,  // through model
            'seal_id',                // FK on details -> seals
            'id',                     // FK on tasks (local key on tasks)
            'id',                     // local key on seals
            'task_id'                 // local key on details -> tasks
        );
    }
}
