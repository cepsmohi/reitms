<?php

namespace App\Livewire\Materials;

use App\Models\Material;
use App\Models\MaterialStock;
use App\Traits\StockCalendarTrait;
use Livewire\Component;

class Materialstocks extends Component
{
    use StockCalendarTrait;

    public $addMivForm = false;
    public $mivno, $code, $quantity;

    public function mount()
    {
        $this->initCalendar();
        $lastEntry = MaterialStock::latest()->first();
        if ($lastEntry) {
            $this->mivno = $lastEntry->miv_no;
        }
    }

    public function addMiv()
    {
        $this->validate([
            'mivno' => 'required',
            'code' => 'required',
            'quantity' => 'required|numeric'
        ]);
        $material = Material::where('code', $this->code)->first();
        if ($material) {
            cusr()->materialstocks()->create([
                'material_id' => $material->id,
                'miv_no' => $this->mivno,
                'stock_in' => $this->quantity
            ]);
        } else {
            return $this->addError('code', "Code $this->code does not exist.");
        }
        session()->flash('alert', 'Added.');
        return redirect()->route('materials.stocks');
    }

    public function render()
    {
        $stocks = MaterialStock::whereDate('created_at', $this->datestr)->get();
        return view('livewire.materials.materialstocks', compact('stocks'));
    }
}
