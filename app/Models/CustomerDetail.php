<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = [
        'sl_no',
        'customer_code',
        'customer_name',
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

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_code', 'code');
    }

}
