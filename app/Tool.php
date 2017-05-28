<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public function projects(){
      return $this->belongsToMany('App\Project');
    }
}
