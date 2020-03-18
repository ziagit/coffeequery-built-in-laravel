<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function techs(){
        return $this->belongsToMany('App\Tech');
    }
}
