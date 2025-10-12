<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        $defaultImage = asset('images/icon/user.svg');
        $imageExists = false;
        $file = null;
        if ($this->pic) {
            $file = 'images/public/avatars/'.$this->pic;
            $imageExists = file_exists($file);
        }
        return $imageExists ? asset($file) : $defaultImage;
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

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
