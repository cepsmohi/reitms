<?php

namespace App\Livewire\Files;

use App\Models\Customer;
use App\Traits\CustomerTrait;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class Filecreate extends Component
{
    use WithFileUploads;
    use CustomerTrait;

    public $file, $name, $tags = 'order', $published;
    public $tagList = false;
    public $tagTypes = ['information', 'order', 'manual', 'report'];

    public function mount(Request $request)
    {
        $this->published = now()->format('Y-m-d');
        if ($request->has('customer_id')) {
            $this->customer = Customer::find($request->customer_id);
        }
    }

    public function updatedFile()
    {
        $this->name = pathinfo($this->file->getClientOriginalName(), PATHINFO_FILENAME);
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
            'file' => 'required',
            'tags' => 'required|string',
            'published' => 'required|date',
        ]);
        if ($this->customercode && !isset($customer)) {
            $customer = $this->createCustomer();
        }
        $link = '';
        if ($this->file != null) {
            $link = $this->file->store('files/'.str_replace('-', '', $data['published']), 'uploads');
        }
        cusr()->files()->create([
            'customer_id' => $customer->id ?? null,
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
