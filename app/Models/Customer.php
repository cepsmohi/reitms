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
        'code', 'name', 'status',
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
