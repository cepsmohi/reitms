<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Usercreate extends Component
{
    public $name, $email, $phone_number;

    public function createUser()
    {
        $data = $this->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:30|unique:users',
            'phone_number' => 'required|string|max:11|unique:users',
        ]);
        User::create([
            'name' => strtoupper($data['name']),
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['phone_number']),
        ]);
        session()->flash('success', 'User created');
        return redirect(route('users'));
    }

    public function render()
    {
        return view('livewire.users.usercreate');
    }
}
