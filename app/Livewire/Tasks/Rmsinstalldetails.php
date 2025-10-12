<?php

namespace App\Livewire\Tasks;

use App\Models\RmsInstallDetail;
use App\Models\Task;
use App\Traits\CommentTrait;
use App\Traits\MeterTrait;
use App\Traits\PhotoTrait;
use App\Traits\RegulatorTrait;
use App\Traits\SealingTrait;
use App\Traits\TaskTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Rmsinstalldetails extends Component
{
    use WithFileUploads;
    use CommentTrait;
    use MeterTrait;
    use PhotoTrait;
    use RegulatorTrait;
    use SealingTrait;
    use TaskTrait;

    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
        $this->findSealNumber();
    }

    public function render()
    {
        return view('livewire.tasks.rmsinstalldetails');
    }
}
