<?php

namespace App\Traits;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

trait FileTrait
{
    public $file;
    public $deleteFileForm = false;

    public function deleteFile(File $file)
    {
        $this->file = $file;
        $this->deleteFileForm = true;
    }

    public function deleteFileConfirm()
    {
        if (Storage::disk('uploads')->exists($this->file->link)) {
            Storage::disk('uploads')->delete($this->file->link);
        }
        $this->file?->delete();
        $this->file = null;
        return $this->deleteFileForm = false;
    }

    public function deleteFileCancel()
    {
        $this->file = null;
        return $this->deleteFileForm = false;
    }
}
