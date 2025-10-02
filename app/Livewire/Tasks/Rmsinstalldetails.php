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
    public $removeSealForm = false;
    public $addCommentForm = false;
    public $editCommentForm = false;
    public $type, $prefix, $sealNumber;
    public $rmsDetail;
    public $comment;

    public function mount(Task $task)
    {
        $this->task = $task;
        $this->findSealNumber();
    }

    public function findSealNumber()
    {
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
        $this->findSealNumber();
        $this->addSealForm = true;
    }

    public function closeSealForm()
    {
        $this->type = null;
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
        $this->task->setRmsInstallDetail($this->type, $seal->id);
        $this->type = null;
        return $this->addSealForm = false;
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

    public function removeSeal(RmsInstallDetail $rmsDetail)
    {
        $this->rmsDetail = $rmsDetail;
        $this->removeSealForm = true;
    }

    public function removeSealConfirm()
    {
        if ($this->rmsDetail && $this->rmsDetail->seal) {
            $this->rmsDetail->seal->update([
                'status' => 'stock',
            ]);
        }

        $this->rmsDetail?->delete();

        $this->rmsDetail = null;
        $this->removeSealForm = false;
    }

    public function removeSealCancel()
    {
        $this->rmsDetail = null;
        return $this->removeSealForm = false;
    }

    public function openCommentForm()
    {
        $this->addCommentForm = true;
    }

    public function closeCommentForm()
    {
        return $this->addCommentForm = false;
    }

    public function addComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        return $this->addCommentForm = false;
    }

    public function closeEditCommentForm()
    {
        $this->editCommentForm = false;
    }

    public function openEditCommentForm()
    {
        $this->comment = $this->task->comment->text;
        $this->editCommentForm = true;
    }

    public function updateComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        return $this->editCommentForm = false;
    }

    public function render()
    {
        return view('livewire.tasks.rmsinstalldetails');
    }
}
