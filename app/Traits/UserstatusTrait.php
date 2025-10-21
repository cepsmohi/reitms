<?php

namespace App\Traits;

trait UserstatusTrait
{
    public bool $userStatusForm = false;

    public function setUserStatus($status)
    {
        $this->user->update(['status' => $status]);
        session()->flash('success', 'Status updated');
        return redirect()->route('users.edit', $this->user);
    }
}
