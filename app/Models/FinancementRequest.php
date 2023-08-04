<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancementRequest extends Model
{
    use HasFactory;
    protected $table = 'financementRequest';    
    protected $fillable = [
        'bytebuilder_id',
        'project_id',
        'financement_request_name',
        'financement_request_description',
        'financement_request_category',
    ];
}