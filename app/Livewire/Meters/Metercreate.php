<?php

namespace App\Livewire\Meters;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Metercreate extends Component
{
    public $href = null, $routeName;
    public $number, $type = 'G-', $manufacturer, $model, $year, $diameter, $comments;

    public function mount()
    {
        $this->href = url()->previous();
        $previousRequest = Request::create($this->href);
        $previousRoute = app('router')->getRoutes()->match($previousRequest);
        $this->routeName = $previousRoute->getName();
    }

    public function createMeter()
    {
        $data = $this->validate([
            'number' => 'required',
            'type' => 'required',
            'manufacturer' => 'nullable',
            'model' => 'nullable',
            'year' => 'nullable',
            'diameter' => 'nullable',
            'comments' => 'nullable',
        ]);
        cusr()->meters()->create($data);
        session()->flash('success', 'Meter creating.. please wait.');
        return redirect()->route('meters');
    }

    public function render()
    {
        return view('livewire.meters.metercreate');
    }
}
