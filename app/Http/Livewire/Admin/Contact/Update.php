<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $contact;

    
    protected $rules = [
        
    ];

    public function mount(Contact $Contact){
        $this->contact = $Contact;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Contact') ]) ]);
        
        $this->contact->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.contact.update', [
            'contact' => $this->contact
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Contact') ])]);
    }
}
