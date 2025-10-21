<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

trait UsersignatureTrait
{
    use WithFileUploads;

    public bool $userSignatureForm = false;
    public $pic;

    public function updateSignature()
    {
        if (!$this->pic) {
            session()->flash('alert', 'Photo not selected');
            return redirect()->route('users.edit', $this->user);
        }

        if (
            $this->user->detail &&
            $this->user->detail->signature &&
            Storage::disk('uploads')->exists($this->user->detail->signature)
        ) {
            Storage::disk('uploads')->delete($this->user->detail->signature);
        }
        $link = $this->pic->store('signatures', 'uploads');
        $this->user->detail->update(['signature' => $link]);
        $this->pic = null;
        session()->flash('success', 'Photo updated');
        return redirect()->route('users.edit', $this->user);
    }
}
