<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\PortfolioProject;

class PortfolioProjectComponent implements CRUDComponent
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
        return PortfolioProject::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['portfolio_project_title','portfolio_project_description', 'portfolio_project_github', 'portfolio_project_img_upload'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['portfolio_project_title','portfolio_project_description', 'portfolio_project_github', 'portfolio_project_img_upload'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [

            'portfolio_project_title' => 'text',
            'portfolio_project_description' => 'text',
            'portfolio_project_github' => 'text',
            'portfolio_project_img_upload' => 'file',
            'bytebuilder_id' => 'number',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'portfolio_project_title' => 'required|string|max:255',
            // Validation rule for the bytebuilder name
            'portfolio_project_description' => 'required|string|max:255',

            'portfolio_project_github' => 'nullable|string|max:255',
            'portfolio_project_img_upload' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
               'bytebuilder_id'    => 'nullable|string|max:255',

           
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
