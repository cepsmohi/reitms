<?php

namespace App\Traits;

use App\Models\Material;
use App\Models\MaterialStock;

trait MaterialTrait
{
    public bool $addMaterialInForm = false;
    public bool $addMaterialOutForm = false;
    public bool $deleteMaterialForm = false;

    public $material;
    public $name;
    public $unit;
    public $materialCode;
    public $quantity;

    public $materialStock;

    public function updatedMaterialCode()
    {
        $this->material = Material::where('code', $this->materialCode)->first();
        if ($this->material) {
            $this->name = $this->material->name;
            $this->unit = $this->material->unit;
        } else {
            $this->name = '';
            $this->unit = '';
        }
    }

    public function addMaterial()
    {
        $this->validate([
            'materialCode' => 'required|string',
            'quantity' => 'required|numeric',
            'name' => 'required|string',
            'unit' => 'required|string',
        ]);
        if (!$this->material) {
            $this->unit = strtolower($this->unit);
            $this->material = cusr()->materials()->create([
                'name' => $this->name,
                'unit' => $this->unit,
                'code' => $this->materialCode,
            ]);
        }
        cusr()->materialstocks()->create([
            'material_id' => $this->material->id,
            'task_id' => $this->task->id,
            'stock_out' => $this->quantity,
        ]);
        $this->reset(['materialCode', 'quantity', 'unit', 'name']);
        $this->task->refresh();
        return $this->addMaterialInForm = false;
    }

    public function removeMaterial()
    {
        $this->validate([
            'materialCode' => 'required',
            'quantity' => 'required|numeric',
        ]);
        $material = Material::where('code', $this->materialCode)->first();
        if (!$material) {
            return $this->addError('materialCode', "Material code $this->materialCode does not exist.");
        }
        cusr()->materialstocks()->create([
            'material_id' => $material->id,
            'task_id' => $this->task->id,
            'stock_in' => $this->quantity,
        ]);
        $this->task->refresh();
        return $this->addMaterialOutForm = false;
    }

    public function deleteMaterial(MaterialStock $materialStock)
    {
        $this->materialStock = $materialStock;
        $this->deleteMaterialForm = true;
    }

    public function deleteMaterialConfirm()
    {
        $this->materialStock?->delete();
        $this->materialStock = null;
        return $this->deleteMaterialForm = false;
    }

    public function deleteMaterialCancel()
    {
        $this->materialStock = null;
        return $this->deleteMaterialForm = false;
    }

}
