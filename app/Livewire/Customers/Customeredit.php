<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use App\Traits\FileTrait;
use Livewire\Component;

class Customeredit extends Component
{
    // for file delete only
    use FileTrait;

    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.customers.customeredit');
    }
}
