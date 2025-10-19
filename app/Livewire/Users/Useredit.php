<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Useredit extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users.useredit');
    }
}
