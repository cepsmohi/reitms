<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regulator extends Model
{
    protected $fillable = [
        'user_id',
        'material_id',
        'number',
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

    public function assignregulator()
    {
        return $this->hasMany(AssignRegulator::class)->latest()->first();
    }

    public function setStatus($status)
    {
        return $this->update(['status' => $status]);
    }
}
