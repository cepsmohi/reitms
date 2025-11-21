<?php

namespace App\Traits;

use App\Models\Seal;
use App\Models\SealRegister;
use Illuminate\Support\Str;

trait SealingTrait
{
    public bool $addSealForm = false;
    public bool $deleteSealForm = false;
    public string $sealType, $prefix, $sealNumber;
    public $sealRegister;

    public function openSealForm($sealType)
    {
        $this->sealType = $sealType;
        $this->findSealNumber();
        $this->addSealForm = true;
    }

    public function findSealNumber()
    {

        $seal = Seal::orderBy('id')
            ->where('status', 'stock')
            ->first();
        if ($seal) {
            $textPart = explode('-', $seal->number)[0];
            $this->prefix = $textPart;
            $numberPart = explode('-', $seal->number)[1];
            $intNumber = (int) $numberPart;
            $this->sealNumber = $intNumber;
        }
    }

    public function closeSealForm()
    {
        $this->sealType = '';
        $this->addSealForm = false;
    }

    public function addSeal()
    {
        $this->validate([
            'prefix' => 'required',
            'sealNumber' => 'required'
        ]);
        $prefix = Str::upper(trim($this->prefix));
        $number = $prefix.'-'.sprintf("%07d", $this->sealNumber);
        $seal = Seal::where('number', $number)->first();
        if (!$seal) {
            $this->addError('sealNumber', "Seal $number does not exist.");
            $this->addError('sealNotExit', "Seal not exist.");
            return null;
        }
        if ($seal->status != 'stock') {
            $this->addError('sealNumber', "Seal already installed.");
            return null;
        }
        $this->task->setSealRegister($this->sealType, $seal->id);
        $this->sealType = '';
        return $this->addSealForm = false;
    }

    public function addSealOnField()
    {
        $user = cusr();
        $prefix = Str::upper(trim($this->prefix));
        $this->validate([
            'prefix' => 'required',
            'sealNumber' => 'required'
        ]);
        $seal = $user->seals()->create([
            'number' => $prefix.'-'.sprintf("%07d", $this->sealNumber)
        ]);
        $seal->update([
            'status' => 'on_field',
        ]);
        $this->task->sealRegisters()->create([
            'seal_id' => $seal->id,
            'position' => $this->sealType,
        ]);
        $this->sealType = '';
        return $this->addSealForm = false;
    }

    public function deleteSeal(SealRegister $sealRegister)
    {
        $this->sealRegister = $sealRegister;
        $this->deleteSealForm = true;
    }

    public function deleteSealConfirm()
    {
        if ($this->sealRegister && $this->sealRegister->seal) {
            if ($this->sealRegister->seal->status == 'on_field') {
                $this->sealRegister?->delete();
                $this->sealRegister->seal?->delete();
            } else {
                $this->sealRegister->seal->update([
                    'status' => 'stock',
                ]);
                $this->sealRegister?->delete();
            }
        }
        $this->sealRegister = null;
        $this->deleteSealForm = false;
    }

    public function deleteSealCancel()
    {
        $this->sealRegister = null;
        return $this->deleteSealForm = false;
    }
}
