<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignRegulator extends Model
{
    protected $fillable = ['task_id', 'regulator_id'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function regulator()
    {
        return $this->belongsTo(Regulator::class);
    }
}
