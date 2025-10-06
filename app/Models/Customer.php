<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code', 'name', 'address',
        'load_hr', 'load_month', 'min_load',
        'pf', 'df', 'run_day', 'run_hour',
        'sec_cash', 'sec_bg', 'status',
        'lat', 'lng', 'zone',
    ];

    protected $casts = [
        'load_hr' => 'decimal:3',
        'load_month' => 'decimal:3',
        'min_load' => 'decimal:3',
        'pf' => 'decimal:4',
        'df' => 'decimal:4',
        'sec_cash' => 'decimal:2',
        'sec_bg' => 'decimal:2',
        'run_day' => 'integer',
        'run_hour' => 'integer',
        'lat' => 'decimal:7',
        'lng' => 'decimal:7'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function detail()
    {
        return $this->hasMany(CustomerDetail::class, 'customer_code', 'code')
            ->latest();
    }

    public function tasks()
    {
        return $this->hasMany(Task::class)->latest();
    }
}
