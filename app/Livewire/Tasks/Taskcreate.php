<?php

namespace App\Livewire\Tasks;

use App\Models\Customer;
use App\Traits\CustomerTrait;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Taskcreate extends Component
{
    use WithPagination;
    use CustomerTrait;

    #[Locked]
    public $type;

    public $types = [
        'rms install',
        'rms maintain'
    ];

    public function mount(Request $request)
    {
        if ($request->has('type')) {
            $type = $this->sanitizeType($request->string('type'));
            session(['task_type' => $type]);
            return redirect()->route('tasks.create');
        }
        if ($request->has('customer_id')) {
            $this->customer = Customer::find($request->customer_id);
        }
        return $this->type = session('task_type');
    }

    private function sanitizeType(string $v)
    {
        $v = strtolower(trim($v));
        return in_array($v, $this->types) ? $v : null;
    }

    public function selectType($t)
    {
        session(['task_type' => $t]);
        $this->type = $t;
    }

    public function createTask()
    {
        $this->validate([
            'customercode' => 'required|string|size:19',
        ]);
        $customer = $this->createCustomer();
        $task = cusr()->tasks()->create([
            'customer_id' => $customer->id,
            'type' => $this->type,
        ]);
        session()->flash('success', 'Task Created');
        return $task->redirectUrl();
    }

    public function render()
    {
        return view('livewire.tasks.taskcreate');
    }
}
