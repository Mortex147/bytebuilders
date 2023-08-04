<?php

namespace App\Http\Livewire\Admin\Task;

use App\Models\Task;
use Livewire\Component;

class Single extends Component
{

    public $task;

    public function mount(Task $Task){
        $this->task = $Task;
    }

    public function delete()
    {
        $this->task->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Task') ]) ]);
        $this->emit('taskDeleted');
    }

    public function render()
    {
        return view('livewire.admin.task.single')
            ->layout('admin::layouts.app');
    }
}
