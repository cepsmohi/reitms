<?php

namespace App\Livewire\Regulators;

use App\Models\Regulator;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Regulatorindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public function render()
    {
        if ($this->search != '') {
            $regulators = Regulator::query()
                ->where('number', 'like', "%$this->search%")
                ->orWhere('model', 'like', "%$this->search%")
                ->orWhere('comments', 'like', "%$this->search%")
                ->paginate(10);
        } else {
            $regulators = Regulator::paginate(10);
        }

        return view('livewire.regulators.regulatorindex', compact('regulators'));
    }
}
