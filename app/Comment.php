<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   
    protected $fillable = [
        
        'post_id',
        'is_active',
        'author',
        'body',
        'email'
        
        
    ];
    
    
    
    public function replies(){
        
        
        return $this->hasMany('App\CommentReply');
        
    }
}
