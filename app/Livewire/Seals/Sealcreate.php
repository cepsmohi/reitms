<?php

namespace App\Livewire\Seals;

use Livewire\Component;

class Sealcreate extends Component
{
    public $sealCollectionType = 'series';
    public $prefix, $startNumber, $endNumber, $sealNumber;

    protected $queryString = ['prefix', 'startNumber', 'endNumber', 'sealNumber'];

    public function selectCondition($type)
    {
        $this->sealCollectionType = $type;
    }

    public function addSeal()
    {
        $user = cusr();
        $prefix = strtoupper($this->prefix);
        if ($this->sealCollectionType == 'series') {
            $this->validate([
                'prefix' => 'required',
                'startNumber' => 'required',
                'endNumber' => 'required',
            ]);
            if ($this->startNumber < $this->endNumber) {
                for ($startNumber = $this->startNumber; $this->endNumber >= $startNumber; $startNumber++) {
                    $user->seals()->create([
                        'number' => $prefix.'-'.sprintf("%07d", $startNumber)
                    ]);
                }
                session()->flash('success', 'Seals added.');
            }
        }
        if ($this->sealCollectionType == 'single') {
            $this->validate([
                'prefix' => 'required',
                'sealNumber' => 'required'
            ]);
            $user->seals()->create([
                'number' => $prefix.'-'.sprintf("%07d", $this->sealNumber)
            ]);
            session()->flash('success', 'Seal added.');
        }
        return redirect()->to('/seals');
    }

    public function render()
    {
        return view('livewire.seals.sealcreate');
    }
}
