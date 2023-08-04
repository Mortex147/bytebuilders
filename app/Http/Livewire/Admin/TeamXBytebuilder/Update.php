<?php

namespace App\Http\Livewire\Admin\TeamXBytebuilder;

use App\Models\TeamXBytebuilder;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $teamxbytebuilder;

    
    protected $rules = [
        
    ];

    public function mount(TeamXBytebuilder $TeamXBytebuilder){
        $this->teamxbytebuilder = $TeamXBytebuilder;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('TeamXBytebuilder') ]) ]);
        
        $this->teamxbytebuilder->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.teamxbytebuilder.update', [
            'teamxbytebuilder' => $this->teamxbytebuilder
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('TeamXBytebuilder') ])]);
    }
}
