<?php

namespace App\Livewire\Customers;

use Livewire\Component;

class Customercreate extends Component
{
    public $name, $code, $address;

    public function createCustomer()
    {
        $data = $this->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
        ]);
        cusr()->customers()->create($data);
        session()->flash('success', 'Customer creating.. please wait.');
        return redirect()->to('/customers');
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
