<?php

namespace App\Livewire\Users;

use App\Traits\UserphotoTrait;
use App\Traits\UsersignatureTrait;
use App\Traits\UservalueTrait;
use Livewire\Component;

class Userprofile extends Component
{
    use UserphotoTrait;
    use UsersignatureTrait;
    use UservalueTrait;

    public $user;

    public function mount()
    {
        $this->user = cusr();
    }

    public function render()
    {
        return view('livewire.users.userprofile');
    }
}
