<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

trait UserphotoTrait
{
    use WithFileUploads;

    public bool $userPhotoForm = false;
    public array $photos = [];
    public $pic;

    public function updatePhoto()
    {
        if (!$this->pic) {
            session()->flash('alert', 'Photo not selected');
            return redirect()->route('users.edit', $this->user);
        }
        if ($this->user->pic && Storage::disk('uploads')->exists($this->user->pic)) {
            Storage::disk('uploads')->delete($this->user->pic);
        }
        $link = $this->pic->store('avatars', 'uploads');
        $this->user->update(['pic' => $link]);
        $this->pic = null;
        session()->flash('success', 'Photo updated');
        return redirect()->route('users.edit', $this->user);
    }
}
