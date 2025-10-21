<?php

namespace App\Livewire\Regulators;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Regulatorcreate extends Component
{
    public $href = null, $routeName;
    public $number, $manufacturer, $model, $year, $diameter, $comments;

    public function mount()
    {
        $this->href = url()->previous();
        $previousRequest = Request::create($this->href);
        $previousRoute = app('router')->getRoutes()->match($previousRequest);
        $this->routeName = $previousRoute->getName();
    }

    public function createRegulator()
    {
        $data = $this->validate([
            'number' => 'required',
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        cusr()->regulators()->create($data);
        session()->flash('processing', 'Regulator creating.. please wait.');
        return redirect()->route('regulators');
    }

    public function render()
    {
        return view('livewire.regulators.regulatorcreate');
    }
}
