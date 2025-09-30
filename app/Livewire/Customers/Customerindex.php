<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Customerindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public $viewStyle = 'card';


    public function render()
    {
        $customers = Customer::query()
            ->where('name', 'like', "%{$this->search}%")
            ->orWhere('code', 'like', "%{$this->search}%")
            ->paginate(20);

        return view('livewire.customers.customerindex', compact('customers'));
    }
}
