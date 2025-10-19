<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\UserphotoTrait;
use App\Traits\UserstatusTrait;
use App\Traits\UservalueTrait;
use Livewire\Component;

class Useredit extends Component
{
    use UserphotoTrait;
    use UserstatusTrait;
    use UservalueTrait;

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
