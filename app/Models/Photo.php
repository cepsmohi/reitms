<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'task_id',
        'link',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
