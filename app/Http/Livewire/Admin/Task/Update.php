<?php

namespace App\Http\Livewire\Admin\Task;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $task;

    
    protected $rules = [
        
    ];

    public function mount(Task $Task){
        $this->task = $Task;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Task') ]) ]);
        
        $this->task->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.task.update', [
            'task' => $this->task
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Task') ])]);
    }
}
