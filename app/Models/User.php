<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
        'pic',
        'role',
        'status',
        'designation',
        'code'
    ];

    public function getImageAttribute()
    {
        if ($this->pic && Storage::disk('uploads')->exists($this->pic)) {
            return asset('uploads/'.$this->pic);
        }
        return asset('images/icon/user.svg');
    }

    public function getSignatureAttribute()
    {
        if (
            $this->detail &&
            $this->detail->signature &&
            Storage::disk('uploads')->exists($this->detail->signature)
        ) {
            return asset('uploads/'.$this->detail->signature);
        }
        return asset('images/icon/signature.jpg');
    }

    public function seals()
    {
        return $this->hasMany(Seal::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function materialstocks()
    {
        return $this->hasMany(MaterialStock::class);
    }

    public function meters()
    {
        return $this->hasMany(Meter::class);
    }

    public function regulators()
    {
        return $this->hasMany(Regulator::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function getOption($field)
    {
        return $this->options()->where('field', $field)->value('value');
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function setOption($field, $value)
    {
        return $this->options()->updateOrCreate(
            ['field' => $field],
            ['value' => $value]
        );
    }

    public function taskValues()
    {
        return $this->hasMany(TaskValue::class);
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
