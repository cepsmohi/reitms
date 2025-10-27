<?php

namespace App\Traits;

use App\Models\Meter;

trait MeterTrait
{
    public string $meterSerialNumber;
    public $addMeterForm = false;

    public function openAddMeterForm()
    {
        $this->number = $this->meterSerialNumber;
        $this->addMeterForm = true;
    }

    public function assignMeter()
    {
        $this->validate([
            'meterSerialNumber' => 'required|string'
        ]);
        $meter = Meter::where('number', $this->meterSerialNumber)
            ->where('status', 'stock')
            ->first();
        if (!$meter) {
            return $this->addError('meterSerialNumber', "Meter $this->meterSerialNumber does not exist.");
        }
        $meter->setStatus('installed');
        $this->task->assignMeter($meter->id);
        $this->meterSerialNumber = '';
        return true;
    }
}
