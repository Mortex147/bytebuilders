<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [ 'post_title',
        
            'post_category' ,
        
            'post_description',
            'post_creator_id' ,
        
            'post_image' ,

            'public',
            
            'suspand'
        ];

    // Define the relationship with the 'category' table
    public function category()
    {
        return $this->belongsTo(Category::class, 'post_category', 'category_name');
    }
    public function creator()
    {
        return $this->belongsTo(Bytebuilder::class, 'post_creator_id');
    }
}