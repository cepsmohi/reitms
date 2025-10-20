<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function user(User $user)
    {
        return $user->role === 'user' && $user->status === 'active';
    }

    public function checker(User $user)
    {
        return in_array($user->role, ['user', 'checker']) && $user->status === 'active';
    }

    public function admin(User $user)
    {
        return in_array($user->role, ['user', 'checker', 'admin']) && $user->status === 'active';
    }
}
