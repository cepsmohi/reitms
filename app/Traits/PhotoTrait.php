<?php

namespace App\Traits;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

trait PhotoTrait
{
    public bool $addPhotoForm = false;
    public bool $deletePhotoForm = false;
    public array $photos = [];
    public $photo;

    public function openPhotoForm()
    {
        $this->addPhotoForm = true;
    }

    public function closePhotoForm()
    {
        $this->addPhotoForm = false;
    }

    public function uploadPhoto()
    {
        $this->validate([
            'photos' => 'required'
        ]);
        foreach ($this->photos as $photo) {
            $filename = $photo->store('photos/'.$this->task->id, 'public');
            $this->task->photos()->create([
                'link' => $filename
            ]);
        }
        $this->photos = [];
        return $this->addPhotoForm = false;
    }

    public function deletePhoto(Photo $photo)
    {
        $this->photo = $photo;
        $this->deletePhotoForm = true;
    }

    public function deletePhotoConfirm()
    {
        if (Storage::disk('public')->exists($this->photo->link)) {
            Storage::disk('public')->delete($this->photo->link);
        }
        $this->photo?->delete();

        $this->photo = null;
        return $this->deletePhotoForm = false;
    }

    public function deletePhotoCancel()
    {
        $this->photo = null;
        return $this->deletePhotoForm = false;
    }
}
