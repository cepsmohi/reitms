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
        'code', 'name', 'status', 'zone'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getDetailAttribute()
    {
        return CustomerDetail::where('customer_code', $this->code)->first();
    }

    public function tasks()
    {
        return $this->hasMany(Task::class)->latest();
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
