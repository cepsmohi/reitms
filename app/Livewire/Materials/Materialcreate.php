<?php

namespace App\Livewire\Materials;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Materialcreate extends Component
{
    public $href = null, $routeName;
    public $name, $code, $unit;

    public function mount()
    {
        $this->href = url()->previous();
        $previousRequest = Request::create($this->href);
        $previousRoute = app('router')
            ->getRoutes()
            ->match($previousRequest);
        $this->routeName = $previousRoute->getName();
    }

    public function createMaterial()
    {
        $data = $this->validate([
            'name' => 'required',
            'code' => 'required',
            'unit' => 'required',
        ]);
        $data['unit'] = strtolower($this->unit);
        cusr()->materials()->create($data);
        session()->flash('processing', 'Material creating.. please wait.');
        return redirect()->route('materials');
    }

    public function render()
    {
        return view('livewire.materials.materialcreate');
    }
}
