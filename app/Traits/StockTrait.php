<?php

namespace App\Traits;

use App\Models\Material;

trait StockTrait
{
    public $editStockForm = false;
    public $material, $code, $materialName, $unit, $status;

    public function openStockForm()
    {
        $this->meter = $this->task->metertest->meter;
        $this->material = $this->meter->material ?? null;
        $this->editStockForm = true;
    }

    public function selectCondition($status)
    {
        $this->status = $status;
    }

    public function updateStock()
    {
        if (!$this->material) {
            $this->material = Material::where('code', $this->code)->first();
            if (!$this->material) {
                $data = $this->validate([
                    'materialName' => 'required',
                    'code' => 'required',
                    'unit' => 'required',
                ]);
                $data['unit'] = strtolower($this->unit);
                $data['name'] = $this->materialName;
                $this->material = cusr()->materials()->create($data);
            }
        }
        $this->meter->update([
            'material_id' => $this->material->id,
            'status' => $this->status,
        ]);
        return $this->editStockForm = false;
    }
}
