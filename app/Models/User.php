<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

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
        'status'
    ];

    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

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

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
