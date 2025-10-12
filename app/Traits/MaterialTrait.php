<?php

namespace App\Traits;

use App\Models\Material;
use App\Models\MaterialStock;

trait MaterialTrait
{
    public bool $addMaterialForm = false;
    public bool $deleteMaterialForm = false;
    public string $materialCode;
    public float $quantity;

    public $materialStock;

    public function openMaterialForm()
    {
        $this->addMaterialForm = true;
    }

    public function closeMaterialForm()
    {
        $this->addMaterialForm = false;
    }

    public function addMaterial()
    {
        $this->validate([
            'materialCode' => 'required',
            'quantity' => 'required|numeric',
        ]);
        $material = Material::where('code', $this->materialCode)->first();
        if (!$material) {
            return $this->addError('materialCode', "Material code $this->meterSerialNumber does not exist.");
        }
        cusr()->materialstocks()->create([
            'material_id' => $material->id,
            'task_id' => $this->task->id,
            'stock_out' => $this->quantity,
        ]);
        return $this->addMaterialForm = false;
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
