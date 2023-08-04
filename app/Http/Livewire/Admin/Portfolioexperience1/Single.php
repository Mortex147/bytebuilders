<?php

namespace App\Http\Livewire\Admin\Portfolioexperience1;

use App\Models\Portfolioexperience1;
use Livewire\Component;

class Single extends Component
{

    public $portfolioexperience1;

    public function mount(Portfolioexperience1 $Portfolioexperience1){
        $this->portfolioexperience1 = $Portfolioexperience1;
    }

    public function delete()
    {
        $this->portfolioexperience1->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Portfolioexperience1') ]) ]);
        $this->emit('portfolioexperience1Deleted');
    }

    public function render()
    {
        return view('livewire.admin.portfolioexperience1.single')
            ->layout('admin::layouts.app');
    }
}
