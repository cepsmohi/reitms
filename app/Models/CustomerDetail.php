<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = [
        'sl_no',
        'code',
        'address',
        'hourly_load',
        'monthly_load',
        'min_load',
        'pf',
        'df',
        'daily_run',
        'hourly_run',
        'sec_dep_cash',
        'sec_dep_bank',
    ];

    protected $casts = [
        'hourly_load' => 'decimal:3',
        'monthly_load' => 'decimal:3',
        'min_load' => 'decimal:3',
        'pf' => 'decimal:4',
        'df' => 'decimal:4',
        'sec_cash' => 'decimal:2',
        'sec_bg' => 'decimal:2',
        'daily_run' => 'integer',
        'hourly_run' => 'integer',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'code', 'code');
    }

}
