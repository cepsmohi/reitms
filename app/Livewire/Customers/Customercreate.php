<?php

namespace App\Livewire\Customers;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Customercreate extends Component
{
    public $href = null, $routeName;
    public $name, $code, $address, $zone;

    public function mount()
    {
        $this->href = url()->previous();
        $previousRequest = Request::create($this->href);
        $previousRoute = app('router')->getRoutes()->match($previousRequest);
        $this->routeName = $previousRoute->getName();
    }

    public function createCustomer()
    {
        $data = $this->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'zone' => 'required',
        ]);
        $customer = cusr()->customers()->create($data);
        session()->flash('processing', 'Customer creating.. please wait.');
        if ($this->routeName == 'customers') {
            return redirect()->route('customers');
        }
        if ($this->routeName == 'tasks.create') {
            return redirect($this->href.'&customer_id='.$customer->id);
        }
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
