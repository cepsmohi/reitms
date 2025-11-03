<?php

namespace App\Livewire\Customers;

use App\Traits\CustomerTrait;
use Livewire\Component;

class Customercreate extends Component
{
    use CustomerTrait;

    public $address;

    public function newlyCreateCustomer()
    {
        $this->validate([
            'customercode' => 'required|string|size:19',
        ]);
        $customer = $this->selectCustomer($this->customercode);

        if (!$customer) {
            $this->validate([
                'customercode' => 'required|string|size:19',
                'customername' => 'required|string',
                'address' => 'required|string'
            ]);
            $firstThree = substr(str_replace('-', '', $this->customercode), 0, 3);
            $this->zone = (int) $firstThree;
            $customer = cusr()->customers()->firstOrCreate([
                'code' => $this->customercode,
                'name' => strtoupper($this->customername),
                'zone' => $this->zone,
            ]);
            $customer->detail()->firstOrCreate([
                'code' => $customer->code,
                'customer_name' => $customer->name,
                'address' => $this->address,
            ]);
        }
        session()->flash('success', 'Customer Created');
        return redirect()->route('customers');
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
