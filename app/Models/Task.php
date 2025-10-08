<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RuntimeException;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'customer_id',
        'type',
        'status',
        'checked_by',
        'approved_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function seals()
    {
        return $this->hasManyThrough(
            Seal::class,              // final model
            RmsInstallDetail::class,  // through model
            'task_id',                // FK on details -> tasks
            'id',                     // FK on seals (local key on seals)
            'id',                     // local key on tasks
            'seal_id'                 // local key on details -> seals
        );
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
        return $this->update([
            'status' => 'approved',
            'approved_by' => cusr()->id,
        ]);
    }

    public function check()
    {
        return $this->update([
            'status' => 'checked',
            'checked_by' => cusr()->id,
        ]);
    }

    public function resetStatus()
    {
        return $this->update([
            'status' => 'pending',
            'checked_by' => null,
            'approved_by' => null,
        ]);
    }

    public function getCheckerAttribute()
    {
        return User::find($this->checked_by) ?? null;
    }

    public function getApproverAttribute()
    {
        return User::find($this->approved_by) ?? null;
    }

    public function setComment(string $text): Comment
    {
        if ($this->comment) {
            $this->comment->update(['text' => $text]);
            return $this->comment;
        }

        return $this->comment()->create(['text' => $text]);
    }

    public function comment()
    {
        return $this->hasOne(Comment::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function setRmsInstallDetail(string $type, int $seal_id): RmsInstallDetail
    {
        // Check if the seal already has a detail assigned
        if (RmsInstallDetail::where('seal_id', $seal_id)->exists()) {
            throw new RuntimeException("Seal ID $seal_id is already assigned to another Task.");
        }

        // Ensure the seal actually exists (optional safety)
        $seal = Seal::find($seal_id);
        if (!$seal) {
            throw new ModelNotFoundException("Seal with ID $seal_id not found.");
        }

        $seal->update([
            'status' => 'install',
        ]);

        // Create the new detail
        return $this->rmsInstallDetails()->create([
            'seal_id' => $seal_id,
            'type' => $type,
        ]);
    }

    public function sealRegisters()
    {
        return $this->hasMany(SealRegister::class);
    }

    public function hasMeter(): bool
    {
        return $this->meter()->exists();
    }

    public function meter()
    {
        return $this->hasOneThrough(
            Meter::class,
            AssignMeter::class,
            'task_id',   // AssignMeter.task_id
            'id',        // Meter.id
            'id',        // Task.id
            'meter_id'   // AssignMeter.meter_id
        );
    }

    public function assignMeter(int $meterId): AssignMeter
    {
        // prevent assigning duplicate meter to same task
        if (AssignMeter::where('task_id', $this->id)->where('meter_id', $meterId)->exists()) {
            throw new RuntimeException('This meter is already assigned to this task.');
        }

        return $this->meterAssignments()->create(['meter_id' => $meterId]);
    }
}
