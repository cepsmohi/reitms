<?php

namespace App\Traits;

trait UserstatusTrait
{
    public bool $userStatusForm = false;

    public function setUserStatus($status)
    {
        $this->user->update(['status' => $status]);
        return $this->userStatusForm = false;
    }
}
