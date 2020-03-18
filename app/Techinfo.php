<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techinfo extends Model
{
    public function techs(){
        return $this->belongsToMany('App\Tech','tech_techinfo','tech_id','techinfo_id');
    }
}
