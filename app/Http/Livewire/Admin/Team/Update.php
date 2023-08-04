<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $team;

    
    protected $rules = [
        
    ];

    public function mount(Team $Team){
        $this->team = $Team;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Team') ]) ]);
        
        $this->team->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.team.update', [
            'team' => $this->team
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Team') ])]);
    }
}
