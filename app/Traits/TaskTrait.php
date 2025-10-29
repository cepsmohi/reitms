<?php

namespace App\Traits;

trait TaskTrait
{
    public $deleteTaskForm = false;

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

    public function deleteTaskConfirm()
    {
        $type = $this->task->type;
        $this->task->metertest?->delete();
        $this->task?->delete();
        session()->flash('success', 'Task deleted');
        if ($type == 'meter test') {
            return redirect()->route('tasks.metertest');
        }
        return redirect()->route('tasks');
    }

    public function deleteTaskCancel()
    {
        return $this->deleteTaskForm = false;
    }
}
