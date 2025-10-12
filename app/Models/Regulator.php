<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regulator extends Model
{
    protected $fillable = [
        'user_id',
        'number',
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

    public function assignregulator()
    {
        return $this->hasMany(AssignRegulator::class)->latest()->first();
    }
}
