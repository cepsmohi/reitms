<?php

namespace App\Livewire\Files;

use App\Models\File;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Fileindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public function render()
    {
        $files = File::latest()
            ->paginate(20);
        if ($this->search != '') {
            $files = File::query()
                ->where('name', 'like', "%{$this->search}%")
                ->paginate(20);
        }
        return view('livewire.files.fileindex', compact('files'));
    }
}
