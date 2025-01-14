<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamXBytebuilder extends Model
{
    use HasFactory;

    protected $table = 'team_x_bytebuilder';

    protected $fillable = [
        'bytebuilder_id',
        'team_id',
    ];

    public $incrementing = false;

}