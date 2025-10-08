<?php

namespace App\Livewire\Materials;

use App\Models\Material;
use App\Traits\SearchTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Materialindex extends Component
{
    use WithPagination;
    use SearchTrait;

    public $viewStyle = 'card';

    public function render()
    {
        $materials = Material::query()
            ->where('name', 'like', "%$this->search%")
            ->orWhere('code', 'like', "%$this->search%")
            ->paginate(10);
        return view('livewire.materials.materialindex', compact('materials'));
    }
}
