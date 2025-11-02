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

    public function getStockAttribute()
    {
        if ($this->meters->count() > 0) {
            return $this->meters()->where('status', 'stock')->count();
        }
        if ($this->regulators->count() > 0) {
            return $this->regulators()->where('status', 'stock')->count();
        }
        $in = $this->stocks->sum('stock_in');
        $out = $this->stocks->sum('stock_out');
        return $in - $out;
    }

    public function meters()
    {
        return $this->hasMany(Meter::class);
    }

    public function regulators()
    {
        return $this->hasMany(Regulator::class);
    }

    public function stocks()
    {
        return $this->hasMany(MaterialStock::class);
    }
}
