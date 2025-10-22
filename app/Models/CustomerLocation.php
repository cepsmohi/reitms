<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerLocation extends Model
{
    protected $fillable = [
        'code',
        'lat',
        'lng',
    ];
    protected $casts = [
        'lat' => 'decimal:6',
        'lng' => 'decimal:6',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'code', 'code');
    }
}
