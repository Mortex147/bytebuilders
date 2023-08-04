<?php

namespace App\Http\Livewire\Admin\PortfolioProject;

use App\Models\PortfolioProject;
use Livewire\Component;

class Single extends Component
{

    public $portfolioproject;

    public function mount(PortfolioProject $PortfolioProject){
        $this->portfolioproject = $PortfolioProject;
    }

    public function delete()
    {
        $this->portfolioproject->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('PortfolioProject') ]) ]);
        $this->emit('portfolioprojectDeleted');
    }

    public function render()
    {
        return view('livewire.admin.portfolioproject.single')
            ->layout('admin::layouts.app');
    }
}
