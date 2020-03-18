<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function app(){
        return $this->belongsTo('App\App');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function project(){
        return $this->belongsTo('App\Project');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
