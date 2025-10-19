<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserphotoTrait;
use App\Traits\UserstatusTrait;
use Livewire\Component;

class Useredit extends Component
{
    use UserstatusTrait;
    use UserphotoTrait;

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
