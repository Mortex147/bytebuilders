<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Team;
use Livewire\Component;

class Single extends Component
{

    public $team;

    public function mount(Team $Team){
        $this->team = $Team;
    }

    public function delete()
    {
        $this->team->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Team') ]) ]);
        $this->emit('teamDeleted');
    }

    public function render()
    {
        return view('livewire.admin.team.single')
            ->layout('admin::layouts.app');
    }
}
