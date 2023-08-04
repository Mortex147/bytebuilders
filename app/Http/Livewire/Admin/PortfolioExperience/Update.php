<?php

namespace App\Http\Livewire\Admin\PortfolioExperience;

use App\Models\PortfolioExperience;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $portfolioexperience;

    
    protected $rules = [
        
    ];

    public function mount(PortfolioExperience $PortfolioExperience){
        $this->portfolioexperience = $PortfolioExperience;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('PortfolioExperience') ]) ]);
        
        $this->portfolioexperience->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.portfolioexperience.update', [
            'portfolioexperience' => $this->portfolioexperience
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('PortfolioExperience') ])]);
    }
}
