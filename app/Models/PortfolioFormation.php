<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioFormation extends Model
{
    protected $table = 'portfolioformation';
    protected $fillable = [
        'portfolio_formation_title',
        'bytebuilder_id',
        'portfolio_formation_description',
        'portfolio_formation_github',
        'portfolio_formation_img_upload',
    ];

    // Define the relationship with 'bytebuilder' table
    public function bytebuilder()
    {
        return $this->belongsTo(Bytebuilder::class, 'bytebuilder_id', 'id');
    }

    
}