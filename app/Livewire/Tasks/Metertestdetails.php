<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Traits\CommentTrait;
use App\Traits\CustomerTrait;
use App\Traits\MeterTrait;
use App\Traits\PhotoTrait;
use App\Traits\SealingTrait;
use App\Traits\StockTrait;
use App\Traits\TaskTrait;
use App\Traits\ValueTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Metertestdetails extends Component
{
    use CommentTrait;
    use CustomerTrait;
    use MeterTrait;
    use PhotoTrait;
    use SealingTrait;
    use StockTrait;
    use TaskTrait;
    use ValueTrait;
    use WithFileUploads;

    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.tasks.metertestdetails');
    }
}
