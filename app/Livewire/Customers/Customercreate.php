<?php

namespace App\Livewire\Customers;

use App\Traits\CustomerTrait;
use Livewire\Component;

class Customercreate extends Component
{
    use CustomerTrait;

    public $href = '';
    public $address;

    public function mount()
    {
        if (request()->query('customercode')) {
            $this->customercode = request()->query('customercode');
            session(['customercode' => $this->customercode]);
        }
        if (request()->query('taskcreate') == 1) {
            session(['href' => 'taskcreate']);
            return redirect()->route('customers.create');
        }
        if (session('customercode')) {
            $this->customercode = session('customercode');
        }
        if (session('href')) {
            $this->href = session('href');
        }
        return null;
    }

    public function newlyCreateCustomer()
    {
        $this->validate([
            'customercode' => 'required|string|size:19',
        ]);
        $customer = $this->selectCustomer($this->customercode);

        if (!$customer) {
            $this->validate([
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
        if ($this->href == 'taskcreate') {
            session()->forget(['customercode', 'href']);
            return redirect()->route('tasks.create', [
                'customercode' => $this->customercode
            ]);
        }
        return redirect()->route('customers');
    }

    public function render()
    {
        return view('livewire.customers.customercreate');
    }
}
