<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'customer_id',
        'type',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeChecked($query)
    {
        return $query->where('status', 'checked');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isChecked()
    {
        return $this->status === 'checked';
    }

    public function isApproved()
    {
        return $this->status === 'approved';
    }

    public function approve()
    {
        return $this->update(['status' => 'approved']);
    }

    public function check()
    {
        return $this->update(['status' => 'checked']);
    }

    public function resetStatus()
    {
        return $this->update(['status' => 'pending']);
    }
}
