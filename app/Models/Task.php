<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $fillable = [
        'task_title',
        'task_category',
        'task_creator_id',
        'task_description',
        'public',
    ];
}