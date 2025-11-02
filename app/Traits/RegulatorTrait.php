<?php

namespace App\Traits;

use App\Models\Regulator;

trait RegulatorTrait
{
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
}
