<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Traits\TaskCalendarTrait;
use Livewire\Component;

class Rmsmaintain extends Component
{
    use TaskCalendarTrait;

    public $type = "rms maintain";

    public function mount()
    {
        $this->initCalendar();
    }

    public function render()
    {
        $tasks = Task::type($this->type)
            ->whereDate('created_at', $this->datestr)
            ->get();
        return view('livewire.tasks.rmsmaintain', compact('tasks'));
    }
}
