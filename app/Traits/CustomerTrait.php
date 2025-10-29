<?php

namespace App\Traits;

use App\Models\Customer;
use App\Models\CustomerDetail;

trait CustomerTrait
{
    public $assignCustomerForm = false;
    public $customercode, $customername, $zone;
    public $customers;

    public function updatingCustomercode()
    {
        if ($this->customercode != '') {
            return $this->customers = CustomerDetail::where('code', 'like', "%$this->customercode%")
                ->limit(1)
                ->get();
        }
    }

    public function assignCustomer()
    {
        $data = $this->validate([
            'customercode' => 'required|string|size:19',
        ]);
        $this->selectCustomer($this->customercode);
        $customer = Customer::where('code', $this->customercode)->first();
        if ($customer == null) {
            $customer = cusr()->customers()->create([
                'code' => $this->customercode,
                'name' => strtoupper($this->customername ?? 'No Name'),
                'zone' => $this->zone,
            ]);
        }
        $this->task->update(['customer_id' => $customer->id]);
        session()->flash('success', 'Customer Assigned');
        return redirect()->route('tasks.metertest.details', $this->task);
    }

    public function selectCustomer($code)
    {
        $this->customercode = $code;
        $customer = CustomerDetail::where('code', $code)->first();
        $this->customername = $customer->customer_name;
        $firstThree = substr(str_replace('-', '', $code), 0, 3);
        $this->zone = (int) $firstThree;
        return $this->customers = null;
    }

}
