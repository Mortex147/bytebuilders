<?php

namespace App\Http\Livewire\Admin\PortfolioProject;

use App\Models\PortfolioProject;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('PortfolioProject') ])]);
        
        if($this->getPropertyValue('portfolio_project_img_upload') and is_object($this->portfolio_project_img_upload)) {
            $this->portfolio_project_img_upload = $this->getPropertyValue('portfolio_project_img_upload')->store('portfolio_project_img_upload');
        }

        PortfolioProject::create([
            'portfolio_project_title' => $this->portfolio_project_title,
            'portfolio_project_description' => $this->portfolio_project_description,
            'portfolio_project_github' => $this->portfolio_project_github,
            'portfolio_project_img_upload' => $this->portfolio_project_img_upload,
            'bytebuilder_id' => $this->bytebuilder_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.portfolioproject.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('PortfolioProject') ])]);
    }
}
