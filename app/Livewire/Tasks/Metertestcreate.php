<?php

namespace App\Livewire\Tasks;

use App\Models\Meter;
use Livewire\Component;

class Metertestcreate extends Component
{
    public $meterSerialNumber, $meterType;

    public function assignMeter()
    {
        $this->validate([
            'meterSerialNumber' => 'required|string'
        ]);
        $meter = Meter::where('number', $this->meterSerialNumber)
            ->first();
        if (!$meter) {
            $data = $this->validate([
                'meterSerialNumber' => 'required|string',
                'meterType' => 'required|string',
            ]);
            if ($this->meterType == null) {
                return $this->addError('meterType', "Add meter type");
            }
            $meter = cusr()->meters()->create([
                'number' => $this->meterSerialNumber,
                'type' => $this->meterType,
            ]);
        }
        $assignmeter = $meter->assignmeters()->latest()->first();
        $customer = null;
        if ($assignmeter) {
            $customer = $assignmeter->task->customer;
        }
        $task = cusr()->tasks()->create([
            'type' => 'meter test',
            'customer_id' => $customer ? $customer->id : null,
        ]);
        $task->metertest()->create([
            'meter_id' => $meter->id,
        ]);
        session()->flash('success', 'Task Created');
        return redirect()->route('tasks.metertest.details', $task);
    }

    public function render()
    {
        return view('livewire.tasks.metertestcreate');
    }
}
