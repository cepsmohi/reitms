<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    protected $fillable = [
        'user_id',
        'material_id',
        'number',
        'type',
        'manufacturer',
        'model',
        'year',
        'diameter',
        'status',
        'comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function assignmeters()
    {
        return $this->hasMany(AssignMeter::class);
    }

    public function setStatus($status)
    {
        return $this->update(['status' => $status]);
    }

    public function tests()
    {
        return $this->hasMany(MeterTest::class);
    }
}
