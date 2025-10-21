<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Changepass extends Component
{
    public string $oldpass, $newpass, $confirm;

    public function changePass()
    {
        $this->validate();
        $user = cusr();
        $user->forceFill(['password' => Hash::make($this->newpass)])->save();
        $this->reset(['oldpass', 'newpass', 'confirm']);
        session()->flash('success', 'Password updated');
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.users.changepass');
    }

    protected function rules(): array
    {
        return [
            'oldpass' => ['required', 'current_password'],
            'newpass' => ['required', 'string', Password::min(8), 'different:oldpass',],
            'confirm' => ['required', 'same:newpass'],
        ];
    }
}
