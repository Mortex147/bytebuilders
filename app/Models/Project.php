<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';  
    protected $fillable = [
        'project_name',
        'project_category',
        'project_creator_id',
        'project_description',
        'public',
    ];
}