<?php

namespace App\Livewire\Files;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Filecreate extends Component
{
    use WithFileUploads;

    public $file, $name, $tags = 'order', $code, $published;
    public $tagList = false;
    public $tagTypes = ['information', 'order', 'manual', 'report'];

    public function mount()
    {
        $this->published = now()->format('Y-m-d');
    }

    public function selectTag($tag)
    {
        $this->tags = $tag;
        $this->tagList = false;
    }

    public function addFile()
    {
        $data = $this->validate([
            'name' => 'required|string',
            'code' => 'nullable|string',
            'file' => 'required',
            'tags' => 'required|string',
            'published' => 'required|date',
        ]);
        if ($data['code'] != null) {
            $customer = Customer::where('code', $data['code'])->first();
            if ($customer) {
                $customer_id = $customer->id;
            }
        }
        $link = '';
        foreach ($this->file as $f) {
            $link = $f->store('files/'.str_replace('-', '', $data['published']), 'uploads');
        }
        cusr()->files()->create([
            'customer_id' => $customer_id ?? null,
            'tags' => $data['tags'],
            'published_at' => $data['published'],
            'name' => $data['name'],
            'link' => $link,
        ]);
        return redirect()->route('files');
    }

    public function render()
    {
        return view('livewire.files.filecreate');
    }
}
