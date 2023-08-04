<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $post;

    public $post_title;
    public $post_category;
    public $post_creator_id;
    public $post_description;
    public $post_image;
    public $public;
    public $suspand;
    
    protected $rules = [
        'post_title' => 'required|string|max:255',
        'post_category' => 'nullable|string|max:255',
        'post_description' => 'required|string',
        'post_creator_id' => 'nullable|integer',
        'post_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'public' => 'nullable|boolean',
        'suspand' => 'nullable|boolean',        
    ];

    public function mount(Post $Post){
        $this->post = $Post;
        $this->post_title = $this->post->post_title;
        $this->post_category = $this->post->post_category;
        $this->post_creator_id = $this->post->post_creator_id;
        $this->post_description = $this->post->post_description;
        $this->post_image = $this->post->post_image;
        $this->public = $this->post->public;
        $this->suspand = $this->post->suspand;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Post') ]) ]);
        
        if($this->getPropertyValue('post_image') and is_object($this->post_image)) {
            $this->post_image = $this->getPropertyValue('post_image')->store('post_image');
        }

        $this->post->update([
            'post_title' => $this->post_title,
            'post_category' => $this->post_category,
            'post_creator_id' => $this->post_creator_id,
            'post_description' => $this->post_description,
            'post_image' => $this->post_image,
            'public' => $this->public,
            'suspand' => $this->suspand,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.post.update', [
            'post' => $this->post
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Post') ])]);
    }
}
