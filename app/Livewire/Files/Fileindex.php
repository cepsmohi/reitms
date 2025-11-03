<?php

namespace App\Livewire\Files;

use App\Models\File;
use App\Traits\FileTrait;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Fileindex extends Component
{
    use WithPagination;
    use SearchTrait;
    use FileTrait;

    public $filterBy = '';

    public function setFilterBy($tag)
    {
        return $this->filterBy = $tag;
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
