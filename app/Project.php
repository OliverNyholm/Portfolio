<?php

namespace App;
use App\Tool;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function tools(){
    return $this->belongsToMany('App\Tool');
  }
  public function courses(){
    return $this->hasOne('App\Course');
  }
}
