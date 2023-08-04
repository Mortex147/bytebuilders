<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Bytebuilder;

class BytebuilderComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;

    public function getModel()
    {
        return Bytebuilder::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['bytebuilder_name', 'bytebuilder_prename', 'bytebuilder_email', 'bytebuilder_password', 'bytebuilder_category', 'bytebuilder_city', 'bytebuilder_country', 'bytebuilder_birthdate', 'profile_image', 'background_image', 'bytebuilder_about', 'address', 'bytebuilder_phone', 'bytebuilder_linkdin', 'bytebuilder_facebook', 'bytebuilder_instagrame', 'bytebuilder_twitter', 'bytebuilder_thread', 'bytebuilder_github', 'bytebuilder_portfolio_exist', 'enable_edit'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['bytebuilder_name', 'bytebuilder_prename', 'bytebuilder_email', 'bytebuilder_password', 'bytebuilder_category', 'bytebuilder_city', 'bytebuilder_country', 'bytebuilder_birthdate', 'profile_image', 'background_image', 'bytebuilder_about', 'address', 'bytebuilder_phone', 'bytebuilder_linkdin', 'bytebuilder_facebook', 'bytebuilder_instagrame', 'bytebuilder_twitter', 'bytebuilder_thread', 'bytebuilder_github', 'bytebuilder_portfolio_exist', 'enable_edit'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function Inputs()
    {
        return [
            'bytebuilder_name' => 'text',
            // Input field for bytebuilder name (text type)
            'bytebuilder_prename' => 'text',
            // Input field for bytebuilder prename (text type)
            'bytebuilder_email' => 'email',
            // Input field for bytebuilder email (text type)
            'bytebuilder_password' => 'text',
            // Input field for bytebuilder password (text type)
            'bytebuilder_category' => 'text',
            // Dropdown/select field for bytebuilder category
            'bytebuilder_city' => 'text',
            // Input field for bytebuilder city (text type)
            'bytebuilder_country' => 'text',
            // Input field for bytebuilder country (text type)
            'bytebuilder_birthdate' => 'date',
            // Input field for bytebuilder birthdate (date type)
            'profile_image' => 'file',
            // File input field for profile image upload
            'background_image' => 'file',
            // File input field for background image upload
            'bytebuilder_about' => 'textarea',
            // Textarea input field for bytebuilder about
            'address' => 'text',
            // Input field for bytebuilder address (text type)
            'bytebuilder_phone' => 'text',
            // Input field for bytebuilder phone (text type)
            'bytebuilder_linkdin' => 'text',
            // Input field for bytebuilder linkedin (text type)
            'bytebuilder_facebook' => 'text',
            // Input field for bytebuilder facebook (text type)
            'bytebuilder_instagrame' => 'text',
            // Input field for bytebuilder instagram (text type)
            'bytebuilder_twitter' => 'text',
            // Input field for bytebuilder twitter (text type)
            'bytebuilder_thread' => 'text',
            // Input field for bytebuilder thread (text type)
            'bytebuilder_github' => 'text',
            // Input field for bytebuilder github (text type)
            'bytebuilder_portfolio_exist' => 'number',
            // Checkbox input for bytebuilder portfolio existence
            'enable_edit' => 'number',
            // Checkbox input for bytebuilder enable edit
            'google_token' => 'text',
            'github_token' => 'text',
            'email_verified_at' => 'datetime',
        ];
    }
    public function ValidationRules()
    {
        return [
            'bytebuilder_name' => 'required|string|max:255',
            // Validation rule for the bytebuilder name
            'bytebuilder_prename' => 'required|string|max:255',
            // Validation rule for the bytebuilder prename
            'bytebuilder_email' => 'required|email|unique:bytebuilder|max:255',
            // Validation rule for the bytebuilder email, should be unique in the 'bytebuilder' table
            'bytebuilder_password' => 'required|string|max:255',
            // Validation rule for the bytebuilder password
            'bytebuilder_category' => 'required|string|max:255',
            // Validation rule for the bytebuilder category
            'bytebuilder_city' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder city
            'bytebuilder_country' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder country
            'bytebuilder_birthdate' => 'nullable|date',
            // Validation rule for the bytebuilder birthdate
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // Validation rule for the profile image
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // Validation rule for the background image
            'bytebuilder_about' => 'nullable|string',
            // Validation rule for the bytebuilder about
            'address' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder address
            'bytebuilder_phone' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder phone
            'bytebuilder_linkdin' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder linkedin
            'bytebuilder_facebook' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder facebook
            'bytebuilder_instagrame' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder instagram
            'bytebuilder_twitter' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder twitter
            'bytebuilder_thread' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder thread
            'bytebuilder_github' => 'nullable|string|max:255',
            // Validation rule for the bytebuilder github
            'bytebuilder_portfolio_exist' => 'nullable|boolean',
            // Validation rule for the bytebuilder portfolio existence
            'enable_edit' => 'nullable|boolean',
            // Validation rule for the bytebuilder enable edit
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}