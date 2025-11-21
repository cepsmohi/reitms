<?php

namespace App\Traits;

use App\Models\Regulator;

trait RegulatorTrait
{
    public $addRegulatorInfoForm = false;

    public string $regulatorSerialNumber;

    public function assignRegulator()
    {
        $this->validate([
            'regulatorSerialNumber' => 'required|string'
        ]);
        $regulator = Regulator::where('number', $this->regulatorSerialNumber)
            ->first();
        if (!$regulator) {
            $regulator = cusr()->regulators()->create([
                'number' => $this->regulatorSerialNumber
            ]);
        }
        $this->task->assignRegulator($regulator->id);
        $regulator->setStatus('installed');
        return $this->task->refresh();
    }

    public function updateRegulatorInfo()
    {
        $regulator = Regulator::where('number', $this->regulatorSerialNumber)
            ->first();
        $data = $this->validate([
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        $regulator->update($data);
        $this->reset(
            'manufacturer',
            'model',
            'year',
            'diameter',
            'comments'
        );
        return $this->addRegulatorInfoForm = false;
    }
}
