<?php

namespace App\Http\Livewire\Admin\Portfolioexperience1;

use App\Models\Portfolioexperience1;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $portfolioexperience1;

    
    protected $rules = [
        
    ];

    public function mount(Portfolioexperience1 $Portfolioexperience1){
        $this->portfolioexperience1 = $Portfolioexperience1;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Portfolioexperience1') ]) ]);
        
        $this->portfolioexperience1->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.portfolioexperience1.update', [
            'portfolioexperience1' => $this->portfolioexperience1
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Portfolioexperience1') ])]);
    }
}
