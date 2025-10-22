<?php

namespace App\Livewire\Customers;

use Livewire\Component;

class Customermap extends Component
{
    public function render()
    {
        return view('livewire.customers.customermap')
            ->layout('components.leaflet');
    }
}
