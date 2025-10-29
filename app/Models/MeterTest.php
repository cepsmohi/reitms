<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeterTest extends Model
{
    protected $fillable = [
        'task_id',
        'meter_id'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function meter()
    {
        return $this->belongsTo(Meter::class);
    }
}
