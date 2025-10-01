<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RmsInstallDetail extends Model
{
    protected $fillable = [
        'task_id',
        'seal_id',
        'type',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function seal()
    {
        return $this->belongsTo(Seal::class);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}
