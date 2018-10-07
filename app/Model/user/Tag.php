<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Model\user\Post','post_tags')->orderBy('created_at','desc')->paginate(4);
    }
    
    public function getRouteKeyName(){
        return 'slug';
    } 
}
