<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    protected $table = 'portfolio_project';
    protected $fillable = [
        'portfolio_project_title',
        'bytebuilder_id',
        'portfolio_project_description',
        'portfolio_project_github',
        'portfolio_project_img_upload',
    ];

    // Define the relationship with 'bytebuilder' table
    public function bytebuilder()
    {
        return $this->belongsTo(Bytebuilder::class, 'bytebuilder_id', 'id');
    }


}