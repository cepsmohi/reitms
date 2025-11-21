<?php

namespace App\Traits;

use App\Models\Meter;

trait MeterTrait
{
    public $addMeterForm = false;
    public $addMeterInfoForm = false;
    public $editMeterForm = false;

    public $meterSerialNumber, $meterType;
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
            ->first();
        if (!$meter) {
            $this->validate([
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
        $this->task->assignMeter($meter->id);
        $meter->setStatus('installed');
        return $this->task->refresh();
    }

    public function updateMeterInfo()
    {
        $meter = Meter::where('number', $this->meterSerialNumber)
            ->first();
        $data = $this->validate([
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        $meter->update($data);
        $this->reset(
            'manufacturer',
            'model',
            'year',
            'diameter',
            'comments'
        );
        return $this->addMeterInfoForm = false;
    }
}
