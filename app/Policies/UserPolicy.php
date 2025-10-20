<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function admin(User $user)
    {
        return $user->role === 'admin' && $user->status === 'active';
    }

    public function checker(User $user)
    {
        return in_array($user->role, ['checker', 'admin']) && $user->status === 'active';
    }

    public function user(User $user)
    {
        return in_array($user->role, ['user', 'checker', 'admin']) && $user->status === 'active';
    }
}
