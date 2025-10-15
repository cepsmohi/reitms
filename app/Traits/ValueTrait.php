<?php

namespace App\Traits;

trait ValueTrait
{
    public bool $addValueForm = false;
    public bool $editValueForm = false;
    public string $field, $value;

    public function openValueForm($field)
    {
        $this->field = $field;
        return $this->addValueForm = true;
    }

    public function addValue()
    {
        $this->validate([
            'value' => 'required|string',
        ]);
        cusr()->taskValues()->create([
            'task_id' => $this->task->id,
            'field' => $this->field,
            'value' => $this->value,
        ]);
        return $this->closeValueForm();
    }

    public function closeValueForm()
    {
        $this->field = '';
        $this->value = '';
        $this->addValueForm = false;
        return $this->editValueForm = false;
    }

    public function openEditValueForm($field)
    {
        $this->field = $field;
        $this->value = $this->task->getValue($field);
        return $this->editValueForm = true;
    }

    public function updateValue()
    {
        $this->validate([
            'value' => 'required|string',
        ]);
        $taskValue = $this->task->getTaskValue($this->field);
        $taskValue->update([
            'value' => $this->value,
        ]);
        return $this->closeValueForm();
    }
}
