<?php

namespace App\Traits;

use App\Models\Drawing;
use Illuminate\Support\Facades\Storage;

trait DrawingTrait
{
    public bool $addDrawingForm = false;
    public bool $deleteDrawingForm = false;
    public array $drawings = [];
    public $drawing;

    public function openDrawingForm()
    {
        $this->addDrawingForm = true;
    }

    public function closeDrawingForm()
    {
        $this->addDrawingForm = false;
    }

    public function uploadDrawing()
    {
        $this->validate([
            'drawings' => 'required'
        ]);
        foreach ($this->drawings as $drawing) {
            $filename = $drawing->store('drawings/'.$this->task->id, 'uploads');
            $this->task->drawing()->create([
                'link' => $filename
            ]);
        }
        $this->drawings = [];
        return $this->addDrawingForm = false;
    }

    public function deleteDrawing(Drawing $drawing)
    {
        $this->drawing = $drawing;
        $this->deleteDrawingForm = true;
    }

    public function deleteDrawingConfirm()
    {
        if (Storage::disk('uploads')->exists($this->drawing->link)) {
            Storage::disk('uploads')->delete($this->drawing->link);
        }
        $this->drawing?->delete();

        $this->drawing = null;
        return $this->deleteDrawingForm = false;
    }

    public function deleteDrawingCancel()
    {
        $this->drawing = null;
        return $this->deleteDrawingForm = false;
    }
}
