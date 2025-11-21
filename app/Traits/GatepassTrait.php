<?php

namespace App\Traits;

use App\Models\Gatepass;
use Illuminate\Support\Facades\Storage;

trait GatepassTrait
{
    public bool $addGatepassForm = false;
    public bool $deleteGatepassForm = false;
    public array $gatepasses = [];
    public $gatepass;

    public function openGatepassForm()
    {
        $this->addGatepassForm = true;
    }

    public function closeGatepassForm()
    {
        $this->addGatepassForm = false;
    }

    public function uploadGatepass()
    {
        $this->validate([
            'gatepasses' => 'required'
        ]);
        foreach ($this->gatepasses as $gatepass) {
            $filename = $gatepass->store('gatepasses/'.$this->task->id, 'uploads');
            $this->task->gatepass()->create([
                'link' => $filename
            ]);
        }
        $this->gatepasses = [];
        return $this->addGatepassForm = false;
    }

    public function deleteGatepass(Gatepass $gatepass)
    {
        $this->gatepass = $gatepass;
        $this->deleteGatepassForm = true;
    }

    public function deleteGatepassConfirm()
    {
        if (Storage::disk('uploads')->exists($this->gatepass->link)) {
            Storage::disk('uploads')->delete($this->gatepass->link);
        }
        $this->gatepass?->delete();

        $this->gatepass = null;
        return $this->deleteGatepassForm = false;
    }

    public function deleteGatepassCancel()
    {
        $this->gatepass = null;
        return $this->deleteGatepassForm = false;
    }
}
