<?php

namespace App\Traits;

use App\Models\Seal;
use App\Models\SealRegister;
use Illuminate\Support\Str;

trait SealingTrait
{
    public bool $addSealForm = false;
    public bool $removeSealForm = false;
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
            return $this->addError('sealNumber', "Seal $number does not exist.");
        }
        $this->task->setSealRegister($this->sealType, $seal->id);
        $this->sealType = '';
        return $this->addSealForm = false;
    }

    public function removeSeal(SealRegister $sealRegister)
    {
        $this->sealRegister = $sealRegister;
        $this->removeSealForm = true;
    }

    public function removeSealConfirm()
    {
        if ($this->sealRegister && $this->sealRegister->seal) {
            $this->sealRegister->seal->update([
                'status' => 'stock',
            ]);
        }

        $this->sealRegister?->delete();

        $this->sealRegister = null;
        $this->removeSealForm = false;
    }

    public function removeSealCancel()
    {
        $this->sealRegister = null;
        return $this->removeSealForm = false;
    }
}
