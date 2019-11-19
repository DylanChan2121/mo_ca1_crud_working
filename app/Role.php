<?php
# @Date:   2019-11-08T18:09:54+00:00
# @Last modified time: 2019-11-08T19:26:39+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
  {
    return $this->belongsToMany('App\User','user_role');
  }
}
