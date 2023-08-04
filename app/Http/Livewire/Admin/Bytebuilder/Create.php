<?php

namespace App\Http\Livewire\Admin\Bytebuilder;

use App\Models\Bytebuilder;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $bytebuilder_name;
    public $bytebuilder_prename;
    public $bytebuilder_email;
    public $bytebuilder_password;
    public $bytebuilder_category;
    public $bytebuilder_city;
    public $bytebuilder_country;
    public $bytebuilder_birthdate;
    public $profile_image;
    public $background_image;
    public $bytebuilder_about;
    public $address;
    public $bytebuilder_phone;
    public $bytebuilder_linkdin;
    public $bytebuilder_facebook;
    public $bytebuilder_instagrame;
    public $bytebuilder_twitter;
    public $bytebuilder_thread;
    public $bytebuilder_github;
    public $bytebuilder_portfolio_exist;
    public $enable_edit;
    public $google_token;
    public $github_token;
    public $email_verified_at;
    
    protected $rules = [
        'bytebuilder_name' => 'required|string|max:255',
        'bytebuilder_prename' => 'required|string|max:255',
        'bytebuilder_email' => 'required|email|unique:bytebuilder|max:255',
        'bytebuilder_password' => 'required|string|max:255',
        'bytebuilder_category' => 'required|string|max:255',
        'bytebuilder_city' => 'nullable|string|max:255',
        'bytebuilder_country' => 'nullable|string|max:255',
        'bytebuilder_birthdate' => 'nullable|date',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'background_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'bytebuilder_about' => 'nullable|string',
        'address' => 'nullable|string|max:255',
        'bytebuilder_phone' => 'nullable|string|max:255',
        'bytebuilder_linkdin' => 'nullable|string|max:255',
        'bytebuilder_facebook' => 'nullable|string|max:255',
        'bytebuilder_instagrame' => 'nullable|string|max:255',
        'bytebuilder_twitter' => 'nullable|string|max:255',
        'bytebuilder_thread' => 'nullable|string|max:255',
        'bytebuilder_github' => 'nullable|string|max:255',
        'bytebuilder_portfolio_exist' => 'nullable|boolean',
        'enable_edit' => 'nullable|boolean',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Bytebuilder') ])]);
        
        if($this->getPropertyValue('profile_image') and is_object($this->profile_image)) {
            $this->profile_image = $this->getPropertyValue('profile_image')->store('profile_image');
        }

        if($this->getPropertyValue('background_image') and is_object($this->background_image)) {
            $this->background_image = $this->getPropertyValue('background_image')->store('background_image');
        }

        Bytebuilder::create([
            'bytebuilder_name' => $this->bytebuilder_name,
            'bytebuilder_prename' => $this->bytebuilder_prename,
            'bytebuilder_email' => $this->bytebuilder_email,
            'bytebuilder_password' => $this->bytebuilder_password,
            'bytebuilder_category' => $this->bytebuilder_category,
            'bytebuilder_city' => $this->bytebuilder_city,
            'bytebuilder_country' => $this->bytebuilder_country,
            'bytebuilder_birthdate' => $this->bytebuilder_birthdate,
            'profile_image' => $this->profile_image,
            'background_image' => $this->background_image,
            'bytebuilder_about' => $this->bytebuilder_about,
            'address' => $this->address,
            'bytebuilder_phone' => $this->bytebuilder_phone,
            'bytebuilder_linkdin' => $this->bytebuilder_linkdin,
            'bytebuilder_facebook' => $this->bytebuilder_facebook,
            'bytebuilder_instagrame' => $this->bytebuilder_instagrame,
            'bytebuilder_twitter' => $this->bytebuilder_twitter,
            'bytebuilder_thread' => $this->bytebuilder_thread,
            'bytebuilder_github' => $this->bytebuilder_github,
            'bytebuilder_portfolio_exist' => $this->bytebuilder_portfolio_exist,
            'enable_edit' => $this->enable_edit,
            'google_token' => $this->google_token,
            'github_token' => $this->github_token,
            'email_verified_at' => $this->email_verified_at,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.bytebuilder.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Bytebuilder') ])]);
    }
}
