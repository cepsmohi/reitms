<?php

namespace App\Traits;

trait UserroleTrait
{
    public bool $userRoleForm = false;

    public function setUserRole($role)
    {
        $this->user->update(['role' => $role]);
        return $this->userRoleForm = false;
    }
}
