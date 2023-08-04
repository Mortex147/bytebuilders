<?php

namespace App\Http\Livewire\Admin\TeamXBytebuilder;

use App\Models\TeamXBytebuilder;
use Livewire\Component;

class Single extends Component
{

    public $teamxbytebuilder;

    public function mount(TeamXBytebuilder $TeamXBytebuilder){
        $this->teamxbytebuilder = $TeamXBytebuilder;
    }

    public function delete()
    {
        $this->teamxbytebuilder->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('TeamXBytebuilder') ]) ]);
        $this->emit('teamxbytebuilderDeleted');
    }

    public function render()
    {
        return view('livewire.admin.teamxbytebuilder.single')
            ->layout('admin::layouts.app');
    }
}
