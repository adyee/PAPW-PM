<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POST extends Model
{
    //
    protected $table = 'posts';

    protected $primaryKey = 'id_posts';
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
    //
    
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    
    
}
