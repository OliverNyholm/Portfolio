<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function projects(){
      return $this->belongsToMany('App\Project');
    }
}
