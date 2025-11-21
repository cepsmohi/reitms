<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class Customerloadinfo extends Component
{
    public $customer;

    public $hourlyload = 0;
    public $setpressure = 5, $pf;
    public $diversityfactor = 0.8;
    public $dailyrun = 26;
    public $hourlyrun = 8;

    public $monthlyload = 0;
    public $minload = 0;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function updated($field)
    {
        $this->updateInfo();
    }

    public function updateInfo()
    {
        $hourlyload = floatval($this->hourlyload);
        $setpressure = floatval($this->setpressure);
        $diversityfactor = floatval($this->diversityfactor);
        $dailyrun = floatval($this->dailyrun);
        $hourlyrun = floatval($this->hourlyrun);

        if (
            $hourlyload <= 0 ||
            $setpressure <= 0 ||
            $diversityfactor <= 0 ||
            $dailyrun <= 0 ||
            $hourlyrun <= 0
        ) {
            $this->monthlyload = 0;
            $this->minload = 0;
            return null;
        }
        $this->pf = ($setpressure + 14.73) / 14.73;
        $monthly = $hourlyload * $this->pf * $diversityfactor * $dailyrun * $hourlyrun;
        $this->monthlyload = round($monthly, 2);
        $factor = $hourlyrun > 12 ? 0.60 : 0.50;
        $this->minload = round($this->monthlyload * $factor, 2);
        return null;
    }

    public function addLoadInfo()
    {
        $this->validate([
            'hourlyload' => 'nullable|numeric',
            'setpressure' => 'nullable|numeric',
            'diversityfactor' => 'nullable|numeric',
            'dailyrun' => 'nullable|numeric',
            'hourlyrun' => 'nullable|numeric',
            'monthlyload' => 'nullable|numeric',
            'minload' => 'nullable|numeric',
        ]);
        $this->customer->detail()->update([
            'hourly_load' => $this->hourlyload,
            'monthly_load' => $this->monthlyload,
            'min_load' => $this->minload,
            'pf' => $this->pf,
            'df' => $this->diversityfactor,
            'daily_run' => $this->dailyrun,
            'hourly_run' => $this->hourlyrun,
        ]);
        session()->flash('success', 'Load Info Added');
        return redirect()->route('customers.edit', $this->customer);
    }

    public function render()
    {
        return view('livewire.customers.customerloadinfo');
    }
}
