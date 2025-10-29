<?php

namespace App\Livewire\Tasks;

use App\Models\Customer;
use App\Traits\SearchTrait;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Taskcreate extends Component
{
    use WithPagination;
    use SearchTrait;

    #[Locked]
    public $type;

    public $customer;

    public $types = [
        'meter test',
        'meter sealing',
        'rms install',
        'rms maintain',
        'rms layoff',
        'rms disconnection',
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

    public function selectCustomer($id)
    {
        $this->customer = Customer::find($id);
    }

    public function createTask()
    {
        $task = cusr()->tasks()->create([
            'customer_id' => $this->customer->id,
            'type' => $this->type,
        ]);
        return $this->redirectUrl($task, $this->type);
    }

    public function redirectUrl($task, $type)
    {
        if ($type == 'rms install') {
            return redirect()->route('tasks.rmsinstall.details', $task);
        }
        if ($type == 'rms maintain') {
            return redirect()->route('tasks.rmsmaintain.details', $task);
        }
        return redirect()->route('tasks');
    }

    public function render()
    {
        $customers = Customer::query()
            ->where('name', 'like', "%$this->search%")
            ->orWhere('code', 'like', "%$this->search%")
            ->limit(5)
            ->get();
        return view('livewire.tasks.taskcreate', [
            'customers' => $customers,
        ]);
    }
}
