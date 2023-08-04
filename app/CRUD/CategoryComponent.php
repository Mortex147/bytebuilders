<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Category;

class CategoryComponent implements CRUDComponent
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
        return Category::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['category_name', 'category_description'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['category_name', 'category_description'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [

            'category_name' => 'text',
            'category_description' => 'text'
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'category_name' => 'required|string|max:255',
            // Validation rule for the bytebuilder name
            'category_description' => 'required|string|max:255',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}