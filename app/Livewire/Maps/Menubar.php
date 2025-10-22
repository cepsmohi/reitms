<?php

namespace App\Livewire\Maps;

use Livewire\Component;

class Menubar extends Component
{
    public function toggleLegend($value)
    {
        $legend = cusr()->getOption('legend');
        if (!$legend) {
            $legend = cusr()->setOption('legend', $value);
        }
        return $legend;
    }

    public function render()
    {
        return view('livewire.maps.menubar');
    }
}
