<?php

namespace App\Traits;

use App\Models\Customer;
use App\Models\CustomerDetail;

trait CustomerTrait
{
    public $assignCustomerForm = false;
    public $customercode, $customername, $zone;
    public $customers = [];

//    public function mountCustomerTrait()
//    {
//        // Set default value
//        $this->customercode = '3-06-';
//        $this->updatingCustomercode();
//    }

    public function updatingCustomercode()
    {
        $input = trim($this->customercode);

        if (!empty($this->customercode)) {
            if (strlen($input) < 11) {
                $this->customers = CustomerDetail::where('code', 'like', "$input%")
                    ->orderBy('code')
                    ->get();
            } elseif (strlen($input) == 11) {
                $this->customers = CustomerDetail::where('code', 'regexp', "^$input(-|$)")
                    ->orderBy('code')
                    ->get();
            } else {
                $this->customers = CustomerDetail::where('code', 'like', "%$input%")
                    ->orderBy('code')
                    ->get();
            }
        } else {
            $this->customers = [];
        }
    }

    public function assignCustomer()
    {
        $this->validate([
            'customercode' => 'required|string|size:19',
        ]);
        $customer = $this->createCustomer();
        $this->task->update(['customer_id' => $customer->id]);
        session()->flash('success', 'Customer Assigned');
        return redirect()->route('tasks.metertest.details', $this->task);
    }

    public function createCustomer()
    {
        $this->selectCustomer($this->customercode);
        $customer = Customer::where('code', $this->customercode)->first();
        if ($customer == null) {
            $customer = cusr()->customers()->create([
                'code' => $this->customercode,
                'name' => strtoupper($this->customername ?? 'No Name'),
                'zone' => $this->zone,
            ]);
        }
        return $customer;
    }

    public function selectCustomer($code)
    {
        $this->customercode = $code;
        $customer = CustomerDetail::where('code', $code)->first();
        if ($customer != null) {
            $this->customername = $customer->customer_name;
            $firstThree = substr(str_replace('-', '', $code), 0, 3);
            $this->zone = (int) $firstThree;
        }
        return $this->customers = [];
    }

}
