<?php

namespace App\Http\Livewire\Admin\Bytebuilder;

use App\Models\Bytebuilder;
use Livewire\Component;

class Single extends Component
{

    public $bytebuilder;

    public function mount(Bytebuilder $Bytebuilder){
        $this->bytebuilder = $Bytebuilder;
    }

    public function delete()
    {
        $this->bytebuilder->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Bytebuilder') ]) ]);
        $this->emit('bytebuilderDeleted');
    }

    public function render()
    {
        return view('livewire.admin.bytebuilder.single')
            ->layout('admin::layouts.app');
    }
}
