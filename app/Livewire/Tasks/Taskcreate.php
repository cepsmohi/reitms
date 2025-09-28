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
        $allowed = [
            'rms install', 'rms maintenance', 'rms layoff',
            'rms dc', 'meter test', 'meter sealing'
        ];

        $v = strtolower(trim($v));
        return in_array($v, $allowed) ? $v : null;
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
        cusr()->tasks()->create([
            'customer_id' => $this->customer->id,
            'type' => $this->type,
        ]);
        return $this->redirectUrl($this->type);
    }

    public function redirectUrl($type)
    {
        if ($type == 'rms install') {
            return redirect()->route('tasks.rmsinstall');
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
