<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakingTaskPreposition extends Model
{
    use HasFactory;

    protected $table = 'making_task_preposition';

    protected $fillable = [
        'bytebuilder_id',
        'task_id',
        'making_task_preposition_description',
        'making_task_preposition_accepted',
    ];

    public $incrementing = false;
 
}