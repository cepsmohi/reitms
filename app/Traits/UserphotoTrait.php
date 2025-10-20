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

    public function updatePhoto(): void
    {
        if (!$this->pic) {
            return;
        }
        if ($this->user->pic && Storage::disk('uploads')->exists($this->user->pic)) {
            Storage::disk('uploads')->delete($this->user->pic);
        }
        $link = $this->pic->store('avatars', 'uploads');
        $this->user->update(['pic' => $link]);
        $this->pic = null;
        $this->userPhotoForm = false;
    }

    public function setUserPhoto($status)
    {
        $this->user->update(['status' => $status]);
        return $this->userPhotoForm = false;
    }
}
