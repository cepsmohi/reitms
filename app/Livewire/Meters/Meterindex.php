<?php

namespace App\Livewire\Meters;

use App\Models\Meter;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Meterindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public function render()
    {
        $meters = Meter::query()
            ->where('number', 'like', "%$this->search%")
            ->orWhere('model', 'like', "%$this->search%")
            ->orWhere('comments', 'like', "%$this->search%")
            ->paginate(10);
        return view('livewire.meters.meterindex', compact('meters'));
    }
}
