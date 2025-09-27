<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class Taskcreate extends Component
{
    public $type;

    protected $queryString = ['type'];

    public function render()
    {
        return view('livewire.tasks.taskcreate');
    }
}
