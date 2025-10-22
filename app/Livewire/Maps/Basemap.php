<?php

namespace App\Livewire\Maps;

use Livewire\Component;

class Basemap extends Component
{
    public $baseMap;
    public $baseMapTitle;
    public $option;

    public function mount()
    {
        $this->option = cusr()->getOption('basemap');
        if (!$this->option) {
            $this->option = cusr()->setOption('basemap', 'osmgray');
        }
        $this->baseMapTitle = $this->option;
        $this->baseMap = $this->getBaseMap($this->option);
        $this->dispatch("updateBaseMapJs");
    }

    public function getBaseMap($name)
    {
        $baseMaps = [
            'osmgray' => 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',
            'osmcolor' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            'roadmap' => 'https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',
            'satellite' => 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',
            'hybrid' => 'https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}',
        ];
        return $baseMaps[$name] ?? $baseMaps['osmgray'];
    }

    public function updateBaseMap($baseMapTitle)
    {
        $this->baseMap = $this->getBasemap($baseMapTitle);
        cusr()->setOption('basemap', $baseMapTitle);
        $this->dispatch("updateBaseMapJs");
    }

    public function render()
    {
        return view('livewire.maps.basemap');
    }
}
