<?php

namespace App\Livewire\Tasks;

use App\Models\Customer;
use App\Traits\CustomerTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Taskcreate extends Component
{
    use WithPagination;
    use CustomerTrait;

    #[Locked]
    public $type;

    public $href;

    public $types = [
        'rms install',
        'rms maintain'
    ];

    public function mount()
    {
        if (request()->query('customer_id')) {
            $customer_id = request()->query('customer_id');
            $this->customer = Customer::find($customer_id);
            $this->customercode = $this->customer->code;
        }
        if (request()->query('type')) {
            $type = $this->sanitizeType(request()->query('type'));
            session(['task_type' => $type]);
            return redirect()->route('tasks.create');
        }
        if (request()->query('customercode')) {
            $this->customercode = request()->query('customercode');
            session(['customercode' => $this->customercode]);
            return redirect()->route('tasks.create');
        }
        if (session('customercode')) {
            $this->customercode = session('customercode');
        }
        if (session('task_type')) {
            $this->type = session('task_type');
        }
        $this->href = $this->getBackUrl();
        return null;
    }

    private function sanitizeType(string $v)
    {
        $v = strtolower(trim($v));
        return in_array($v, $this->types) ? $v : null;
    }

    public function getBackUrl()
    {
        $type = strtolower(trim($this->type));
        $map = [
            'rms install' => 'tasks.rmsinstall',
            'rms maintain' => 'tasks.rmsmaintain',
        ];
        return route($map[$type] ?? 'tasks');
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
        session()->forget(['customercode', 'task_type']);
        return $task->redirectUrl();
    }

    public function render()
    {
        return view('livewire.tasks.taskcreate');
    }
}
