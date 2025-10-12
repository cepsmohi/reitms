<?php

namespace App\Traits;

trait TaskTrait
{
    public function reportTask()
    {
        $this->task->report();
    }

    public function checkTask()
    {
        $this->task->check();
    }

    public function approveTask()
    {
        $this->task->approve();
    }

    public function resetTask()
    {
        $this->task->resetStatus();
    }
}
