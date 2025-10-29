<?php

namespace App\Livewire\Tasks;

use App\Models\Meter;
use Livewire\Component;

class Metertestcreate extends Component
{
    public $number, $type;

    public function assignMeter()
    {
        $this->validate([
            'number' => 'required|string'
        ]);
        $meter = Meter::where('number', $this->number)
            ->first();
        if (!$meter) {
            $data = $this->validate([
                'number' => 'required|string',
                'type' => 'required|string',
            ]);
            if ($this->type == null) {
                return $this->addError('type', "Add meter type");
            }
            $meter = cusr()->meters()->create($data);
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
