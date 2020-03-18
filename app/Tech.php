<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    public function apps(){
        return $this->belongsToMany('App\App');
    }
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
    public function projects(){
        return $this->belongsToMany('App\Project');
    }
    public function techinfos(){
        return $this->belongsToMany('App\Techinfo','tech_techinfo', 'techinfo_id', 'tech_id');
    }
}
