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
        $this->task->setTaskValue($this->field, $this->value);
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
        $this->task->setTaskValue($this->field, $this->value);
        return $this->closeValueForm();
    }
}
