<?php

namespace App\Http\Livewire\Admin\PortfolioExperience;

use App\Models\PortfolioExperience;
use Livewire\Component;

class Single extends Component
{

    public $portfolioexperience;

    public function mount(PortfolioExperience $PortfolioExperience){
        $this->portfolioexperience = $PortfolioExperience;
    }

    public function delete()
    {
        $this->portfolioexperience->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('PortfolioExperience') ]) ]);
        $this->emit('portfolioexperienceDeleted');
    }

    public function render()
    {
        return view('livewire.admin.portfolioexperience.single')
            ->layout('admin::layouts.app');
    }
}
