<?php

namespace App\Traits;

trait CreatemeterTrait
{
    public $number, $type = 'G-', $manufacturer, $model, $year, $diameter, $comments;

    public function createMeter()
    {

        $data = $this->validate([
            'number' => 'required',
            'type' => 'required',
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        cusr()->meters()->create($data);
        session()->flash('processing', 'Meter creating.. please wait.');
        if ($this->task != null) {
            $this->assignMeter();
            if ($this->task->type == 'rms maintain') {
                return redirect()->route('tasks.rmsmaintain.details', $this->task);
            }
        }
        return redirect()->route('meters');
    }
}
