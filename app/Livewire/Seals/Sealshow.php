<?php

namespace App\Livewire\Seals;

use App\Models\Seal;
use Livewire\Component;

class Sealshow extends Component
{
    public $seal;

    public function mount(Seal $seal)
    {
        $this->seal = $seal;
    }

    public function render()
    {
        return view('livewire.seals.sealshow');
    }
}
