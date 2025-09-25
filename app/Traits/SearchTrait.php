<?php

namespace App\Traits;

use Livewire\Attributes\Url;

trait SearchTrait
{
    #[Url(as: 'search', history: true, except: '')]
    public string $search = '';
    
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function resetSearch()
    {
        $this->reset('search');
        $this->resetPage();
    }
}
