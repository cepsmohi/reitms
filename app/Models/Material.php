<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    protected $fillable = [
        'user_id',
        'code', 'name', 'unit'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function meters()
    {
        return $this->hasMany(Meter::class);
    }

    public function regulators()
    {
        return $this->hasMany(Regulator::class);
    }

    public function getStockAttribute()
    {
        $in = $this->stocks->sum('stock_in');
        $out = $this->stocks->sum('stock_out');
        return $in - $out;
    }

    public function stocks()
    {
        return $this->hasMany(MaterialStock::class);
    }
}
