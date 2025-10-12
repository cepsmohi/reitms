<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Traits\TaskCalendarTrait;
use Livewire\Component;

class Rmsinstall extends Component
{
    use TaskCalendarTrait;

    public function mount()
    {
        $this->initCalendar();
    }

    public function render()
    {
        $tasks = Task::type('rms install')
            ->whereDate('created_at', $this->datestr)
            ->get();
        return view('livewire.tasks.rmsinstall', compact('tasks'));
    }
}
