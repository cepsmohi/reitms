<?php

namespace App\Livewire\Materials;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Materialcreate extends Component
{
    public $href = null, $routeName;
    public $name, $code, $address;

    public function mount()
    {
        $this->href = url()->previous();
        $previousRequest = Request::create($this->href);
        $previousRoute = app('router')->getRoutes()->match($previousRequest);
        $this->routeName = $previousRoute->getName();
    }

    public function createMaterial()
    {
        $data = $this->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
        ]);
        $material = cusr()->materials()->create($data);
        session()->flash('success', 'Material creating.. please wait.');
        if ($this->routeName != 'materials') {
            return redirect($this->href.'&material_id='.$material->id);
        }
        return redirect()->route('materials');
    }

    public function render()
    {
        return view('livewire.materials.materialcreate');
    }
}
