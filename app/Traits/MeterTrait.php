<?php

namespace App\Traits;

use App\Models\Meter;

trait MeterTrait
{
    public string $meterSerialNumber;
    public $addMeterForm = false;
    public $editMeterForm = false;

    public $meter, $manufacturer, $model, $year, $diameter, $comments;

    public function openEditMeterForm()
    {
        $this->meter = $this->task->metertest->meter;
        $this->manufacturer = $this->meter->manufacturer;
        $this->model = $this->meter->model;
        $this->year = $this->meter->year;
        $this->diameter = $this->meter->diameter;
        $this->comments = $this->meter->comments;
        $this->editMeterForm = true;
    }

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

    public function updateMeter()
    {
        $data = $this->validate([
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        $this->meter->update($data);
        session()->flash('success', 'Meter info updated.');
        return $this->editMeterForm = false;
    }
}
