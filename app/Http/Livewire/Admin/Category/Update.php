<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $category;

    public $category_name;
    public $category_description;
    
    protected $rules = [
        'category_name' => 'required|string|max:255',
        'category_description' => 'required|string|max:255',        
    ];

    public function mount(Category $Category){
        $this->category = $Category;
        $this->category_name = $this->category->category_name;
        $this->category_description = $this->category->category_description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Category') ]) ]);
        
        $this->category->update([
            'category_name' => $this->category_name,
            'category_description' => $this->category_description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.category.update', [
            'category' => $this->category
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Category') ])]);
    }
}
