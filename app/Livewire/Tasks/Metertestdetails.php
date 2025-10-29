<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Traits\CommentTrait;
use App\Traits\CustomerTrait;
use App\Traits\MeterTrait;
use App\Traits\SealingTrait;
use App\Traits\StockTrait;
use App\Traits\TaskTrait;
use App\Traits\ValueTrait;
use Livewire\Component;

class Metertestdetails extends Component
{
    use CommentTrait;
    use CustomerTrait;
    use MeterTrait;
    use SealingTrait;
    use StockTrait;
    use TaskTrait;
    use ValueTrait;

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
