<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioExperience extends Model
{
    protected $table = 'portfolio_experience';
    protected $fillable = [
        'portfolio_experience_title',
        'bytebuilder_id',
        'portfolio_experience_description',
        'portfolio_project_github',
        'portfolio_experience_img_upload',
    ];

    // Define the relationship with 'bytebuilder' table
    public function bytebuilder()
    {
        return $this->belongsTo(Bytebuilder::class, 'bytebuilder_id', 'id');
    }

  
}