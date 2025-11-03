<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use App\Traits\FileTrait;
use Livewire\Component;

class Customeredit extends Component
{
    use FileTrait;

    public $customer;
    public $editCustomerCodeForm = false;
    public $customerCode;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->customerCode = $customer->code;
    }

    public function updateCustomerCode()
    {
        $this->validate([
            'customerCode' => 'required|unique:customers,code,'.$this->customer->id,
        ]);
        $this->customer->update([
            'code' => $this->customerCode
        ]);
        return $this->editCustomerCodeForm = false;
    }

    public function render()
    {
        return view('livewire.customers.customeredit');
    }
}
