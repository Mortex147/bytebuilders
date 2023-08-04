<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Post;

class PostComponent implements CRUDComponent
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
        return Post::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['post_title', 'post_category', 'post_creator_id', 'post_description', 'post_image', 'public', 'suspand'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['post_title', 'post_category', 'post_creator_id', 'post_description', 'post_image', 'public', 'suspand'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'post_title' => 'text',
            // Input field for post title (text type)
            'post_category' => 'text',
            // Dropdown/select field for post category
            'post_creator_id' => 'number',
            // Input field for post creator ID (integer type)
            'post_description' => 'textarea',
            // Textarea input field for post description
            'post_image' => 'file',
            // File input field for post image upload
            'public' => 'number',
            // Checkbox input for public visibility
            'suspand' => 'number',
        ];
    }


    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'post_title' => 'required|string|max:255',
            // Validation rule for the post title
            'post_category' => 'nullable|string|max:255',
            // Validation rule for the post category
            'post_description' => 'required|string',
            'post_creator_id' => 'nullable|integer',
            // Validation rule for the post description
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // Validation rule for the post image
            'public' => 'nullable|boolean',
            // Validation rule for the public flag
            'suspand' => 'nullable|boolean',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}