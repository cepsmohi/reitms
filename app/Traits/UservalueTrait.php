<?php

namespace App\Traits;

trait UservalueTrait
{
    public bool $userValueChangeForm = false;
    public $formTitle, $submitFun;
    public $field, $placeholder, $icon;
    public $name, $email, $phone_number, $designation, $code;

    public function openUserValueChangeForm($formTitle, $submitFun, $field, $placeholder, $icon)
    {
        $this->formTitle = $formTitle;
        $this->submitFun = $submitFun;
        $this->field = $field;
        $this->placeholder = $placeholder;
        $this->icon = $icon;
        $this->userValueChangeForm = true;
    }

    public function setUserValue()
    {
        $rules = match ($this->field) {
            'name' => ['name' => 'required|string'],
            'email' => ['email' => 'required|email|unique:users,email,'.$this->user->id],
            'phone_number' => [
                'phone_number' => [
                    'required',
                    'regex:/^0\d{10}$/',
                    'unique:users,phone_number,'.$this->user->id,
                ],
            ],
            'designation' => ['designation' => 'required|string'],
            'code' => [
                'code' => [
                    'required',
                    'regex:/^0\d{4}$/',
                    'unique:users,code,'.$this->user->id,
                ],
            ],
            default => [],
        };
        if (!empty($rules)) {
            $data = $this->validate($rules);
            $this->user->update($data);
        }
        $this->userValueChangeForm = false;
    }


    public function setUserDetailValue()
    {
        $data = null;
        if ($this->field == 'name') {
            $data = $this->validate([
                'name' => 'required|string',
            ]);
        }
        if ($this->user->detail) {
            $this->user->detail->update($data);
        } else {
            $this->user->detail()->create($data);
        }
        return $this->userValueChangeForm = false;
    }
}
