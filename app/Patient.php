<?php
# @Date:   2019-11-12T14:58:31+00:00
# @Last modified time: 2019-11-18T18:23:47+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }

   public function visits()
    {
    // return $this->belongsToMany('App\Admin')->using('App\Visits');//get rid of this function
  }
}
