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
            ->where('status', 'stock')
            ->first();
        if (!$regulator) {
            return $this->addError('regulatorSerialNumber', "Regulator $this->regulatorSerialNumber does not exist.");
        }
        $regulator->setStatus('installed');
        $this->task->assignRegulator($regulator->id);
        $this->regulatorSerialNumber = '';
        return true;
    }
}
