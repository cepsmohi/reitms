<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Traits\CommentTrait;
use App\Traits\MeterTrait;
use App\Traits\SealingTrait;
use App\Traits\StockTrait;
use App\Traits\TaskTrait;
use App\Traits\ValueTrait;
use Livewire\Component;

class Metertestdetails extends Component
{
    use ValueTrait;
    use SealingTrait;
    use CommentTrait;
    use TaskTrait;
    use MeterTrait;
    use StockTrait;

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
