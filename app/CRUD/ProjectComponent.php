<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Project;

class ProjectComponent implements CRUDComponent
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
        return Project::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['project_name', 'project_category', 'project_description', 'public'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['project_name', 'project_category', 'project_description', 'public'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'project_name' => 'text',
            'project_email' => 'email',
            'project_category' => 'text',
            'project_description' => 'text',
            'public' => 'number',
    
    ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [

            'project_name' => 'required|string|max:255',
            // Validation rule for the post title
            'project_description' => 'nullable|string|max:255',
            // Validation rule for the post category
            'project_category' => 'required|string',
            'project_email' => 'required|email|unique:bytebuilder|max:255',
          
            'public' => 'nullable|boolean',
   
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
