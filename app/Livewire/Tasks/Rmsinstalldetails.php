<?php

namespace App\Livewire\Tasks;

use App\Models\RmsInstallDetail;
use App\Models\Seal;
use App\Models\Task;
use Illuminate\Support\Str;
use Livewire\Component;

class Rmsinstalldetails extends Component
{
    public $task;
    public $addSealForm = false;
    public $type, $prefix, $sealNumber;

    public function mount(Task $task)
    {
        $this->task = $task;
        $lastEntry = Rmsinstalldetail::latest()->first();
        if ($lastEntry) {
            $textPart = explode('-', $lastEntry->seal->number)[0];
            $this->prefix = $textPart;
            $numberPart = explode('-', $lastEntry->seal->number)[1];
            $intNumber = (int) $numberPart;
            $this->sealNumber = $intNumber + 1;
        }
    }

    public function openSealForm($type)
    {
        $this->type = $type;
        $this->addSealForm = true;
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
            return $this->addError('sealNumber', "Seal {$number} does not exist.");
        }
        $this->task->setRmsInstallDetail($this->type, $seal->id);
        session()->flash('success', 'Adding seal… please wait.');
        return redirect()->route('tasks.rmsinstall.details', $this->task);
    }

    public function checkTask()
    {
        $this->task->check();
    }

    public function approveTask()
    {
        $this->task->approve();
    }

    public function resetTask()
    {
        $this->task->resetStatus();
    }

    public function render()
    {
        return view('livewire.tasks.rmsinstalldetails');
    }
}
