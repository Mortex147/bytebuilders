<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancersXRequest extends Model
{
    use HasFactory;

    protected $table = 'financers_x_request';

    protected $fillable = [
        'bytebuilder_id',
        'financement_request_id',
        'financement_proposition_description',
        'financement_request_accepted',
    ];

    public $incrementing = false;
   
}