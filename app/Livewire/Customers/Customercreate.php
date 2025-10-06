<?php

namespace App\Livewire\Customers;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Customercreate extends Component
{
    public $href = null, $routeName;
    public $name, $code, $address;

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
        ]);
        $customer = cusr()->customers()->create($data);
        session()->flash('success', 'Customer creating.. please wait.');
        if ($this->routeName != 'customers') {
            return redirect($this->href.'&customer_id='.$customer->id);
        }
        return redirect()->route('customers');
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
