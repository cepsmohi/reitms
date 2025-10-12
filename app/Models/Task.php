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
            SealRegister::class,  // through model
            'task_id',                // FK on details -> tasks
            'id',                     // FK on seals (local key on seals)
            'id',                     // local key on tasks
            'seal_id'                 // local key on details -> seals
        );
    }

    public function materialstocks()
    {
        return $this->hasMany(MaterialStock::class);
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

    public function isReporting()
    {
        return $this->status === 'reporting';
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


    public function report()
    {
        return $this->update([
            'status' => 'pending',
        ]);
    }

    public function resetStatus()
    {
        return $this->update([
            'status' => 'reporting',
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

    public function drawing()
    {
        return $this->hasOne(Drawing::class);
    }

    public function setSealRegister(string $type, int $seal_id): SealRegister
    {
        if (SealRegister::where('seal_id', $seal_id)->exists()) {
            throw new RuntimeException("Seal ID $seal_id is already assigned to another Task.");
        }
        $seal = Seal::find($seal_id);
        if (!$seal) {
            throw new ModelNotFoundException("Seal with ID $seal_id not found.");
        }
        $seal->update([
            'status' => 'install',
        ]);
        return $this->sealRegisters()->create([
            'seal_id' => $seal_id,
            'position' => $type,
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
            'task_id',
            'id',
            'id',
            'meter_id'
        );
    }

    public function hasRegulator(): bool
    {
        return $this->regulator()->exists();
    }

    public function regulator()
    {
        return $this->hasOneThrough(
            Regulator::class,
            AssignRegulator::class,
            'task_id',
            'id',
            'id',
            'regulator_id'
        );
    }

    public function assignMeter(int $meterId): AssignMeter
    {
        if (AssignMeter::where('task_id', $this->id)->where('meter_id', $meterId)->exists()) {
            throw new RuntimeException('This meter is already assigned to this task.');
        }
        return $this->meterAssignment()->create(['meter_id' => $meterId]);
    }

    public function meterAssignment()
    {
        return $this->hasOne(AssignMeter::class);
    }

    public function assignRegulator(int $regulatorId): AssignRegulator
    {
        if (AssignRegulator::where('task_id', $this->id)->where('regulator_id', $regulatorId)->exists()) {
            throw new RuntimeException('This regulator is already assigned to this task.');
        }
        return $this->regulatorAssignment()->create(['regulator_id' => $regulatorId]);
    }

    public function regulatorAssignment()
    {
        return $this->hasOne(AssignRegulator::class);
    }
}
