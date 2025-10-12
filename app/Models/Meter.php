<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    protected $fillable = [
        'user_id',
        'number',
        'type',
        'manufacturer',
        'model',
        'production_year',
        'diameter',
        'status',
        'comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignmeter()
    {
        return $this->hasMany(AssignMeter::class)->latest()->first();
    }

    public function setStatus($status)
    {
        return $this->update(['status' => $status]);
    }
}
