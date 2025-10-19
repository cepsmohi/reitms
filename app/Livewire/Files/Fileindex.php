<?php

namespace App\Livewire\Files;

use App\Models\File;
use App\Traits\SearchTrait;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Fileindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public $file;
    public $deleteFileForm = false;
    public $filterBy = '';

    public function setFilterBy($tag)
    {
        return $this->filterBy = $tag;
    }

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

    public function render()
    {
        $query = File::query();
        if ($this->search != '') {
            $query->where('name', 'like', "%{$this->search}%");
        }
        if ($this->filterBy != '') {
            $query->where('tags', $this->filterBy);
        }
        $files = $query->paginate(20);
        return view('livewire.files.fileindex', compact('files'));
    }
}
