<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Bytebuilder extends Authenticatable implements AuthenticatableContract, MustVerifyEmail
{
    use Notifiable;
    protected $table = 'bytebuilder';
    protected $fillable = [
        'bytebuilder_name',
        'bytebuilder_prename',
        'bytebuilder_email',
        'bytebuilder_password',
        'bytebuilder_category',
        'bytebuilder_city',
        'bytebuilder_country',
        'bytebuilder_birthdate',
        'profile_image',
        'background_image',
        'bytebuilder_about',
        'address',
        'bytebuilder_phone',
        'bytebuilder_linkdin',
        'bytebuilder_facebook',
        'bytebuilder_instagrame',
        'bytebuilder_twitter',
        'bytebuilder_thread',
        'bytebuilder_github',
        'bytebuilder_portfolio_exist',
        'enable_edit',
        'email_verified_at',
    ];

    // Define the relationship with 'portfolio_project' table
    public function portfolioProjects()
    {
        return $this->hasMany(PortfolioProject::class, 'bytebuilder_id', 'id');
    }

    // Define the relationship with 'portfolio_experience' table
    public function portfolioExperiences()
    {
        return $this->hasMany(PortfolioExperience::class, 'bytebuilder_id', 'id');
    }

    // Define the relationship with 'portfolio_formation' table
    public function portfolioFormations()
    {
        return $this->hasMany(PortfolioFormation::class, 'bytebuilder_id', 'id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_creator_id');
    }

}