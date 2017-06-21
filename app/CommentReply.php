<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable = [
        
        'post_id',
        'is_active',
        'author',
        'body',
        'email'
        
        
    ];
    
    
    public function comment(){
        
        
        return $this->belongsTo('App\Comment');
        
    }
    
}
