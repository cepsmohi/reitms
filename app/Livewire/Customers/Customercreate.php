<?php

namespace App\Livewire\Customers;

use Livewire\Component;

class Customercreate extends Component
{
    public $href = null;
    public $name, $code, $address;

    public function mount()
    {
        $this->href = url()->previous();
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
        if ($this->href) {
            return redirect($this->href.'&customer_id='.$customer->id);
        }
        return redirect()->to('/customers');
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
