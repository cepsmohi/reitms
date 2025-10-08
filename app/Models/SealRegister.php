<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SealRegister extends Model
{
    protected $fillable = [
        'task_id',
        'seal_id',
        'position',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function seal()
    {
        return $this->belongsTo(Seal::class);
    }

    public function scopePosition($query, $position)
    {
        return $query->where('position', $position);
    }
}
