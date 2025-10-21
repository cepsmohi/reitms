<?php

namespace App\Traits;

trait UserroleTrait
{
    public bool $userRoleForm = false;

    public function setUserRole($role)
    {
        $this->user->update(['role' => $role]);
        session()->flash('success', 'Role changed');
        return redirect()->route('users.edit', $this->user);
    }
}
