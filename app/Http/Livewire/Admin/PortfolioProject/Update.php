<?php

namespace App\Http\Livewire\Admin\PortfolioProject;

use App\Models\PortfolioProject;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $portfolioproject;

    public $portfolio_project_title;
    public $portfolio_project_description;
    public $portfolio_project_github;
    public $portfolio_project_img_upload;
    public $bytebuilder_id;
    
    protected $rules = [
        'portfolio_project_title' => 'required|string|max:255',
        'portfolio_project_description' => 'required|string|max:255',
        'portfolio_project_github' => 'nullable|string|max:255',
        'portfolio_project_img_upload' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'bytebuilder_id' => 'nullable|string|max:255',        
    ];

    public function mount(PortfolioProject $PortfolioProject){
        $this->portfolioproject = $PortfolioProject;
        $this->portfolio_project_title = $this->portfolioproject->portfolio_project_title;
        $this->portfolio_project_description = $this->portfolioproject->portfolio_project_description;
        $this->portfolio_project_github = $this->portfolioproject->portfolio_project_github;
        $this->portfolio_project_img_upload = $this->portfolioproject->portfolio_project_img_upload;
        $this->bytebuilder_id = $this->portfolioproject->bytebuilder_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('PortfolioProject') ]) ]);
        
        if($this->getPropertyValue('portfolio_project_img_upload') and is_object($this->portfolio_project_img_upload)) {
            $this->portfolio_project_img_upload = $this->getPropertyValue('portfolio_project_img_upload')->store('portfolio_project_img_upload');
        }

        $this->portfolioproject->update([
            'portfolio_project_title' => $this->portfolio_project_title,
            'portfolio_project_description' => $this->portfolio_project_description,
            'portfolio_project_github' => $this->portfolio_project_github,
            'portfolio_project_img_upload' => $this->portfolio_project_img_upload,
            'bytebuilder_id' => $this->bytebuilder_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.portfolioproject.update', [
            'portfolioproject' => $this->portfolioproject
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('PortfolioProject') ])]);
    }
}
