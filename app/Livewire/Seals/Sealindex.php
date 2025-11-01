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
        $seals = Seal::orderByDesc('updated_at')
            ->paginate(20);
        if ($this->search != '') {
            $seals = Seal::query()
                ->where('number', 'like', "%{$this->search}%")
                ->orderByDesc('updated_at')
                ->paginate(20);
        }
        return view('livewire.seals.sealindex', compact('seals'));
    }
}
