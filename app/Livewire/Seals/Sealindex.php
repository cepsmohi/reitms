<?php

namespace App\Livewire\Seals;

use App\Models\Seal;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Sealindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public function render()
    {
        $seals = Seal::query()
            ->where('number', 'like', "%{$this->search}%")
            ->paginate(20);
        return view('livewire.seals.sealindex', compact('seals'));
    }
}
