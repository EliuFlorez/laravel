<?php

namespace App\Services\Posts;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of PostModel
 *
 * @author desarrollo
 */
class PostModel extends Model{
    
    protected $table = "posts";
    protected $fillable = ['title', 'body'];
    
}
