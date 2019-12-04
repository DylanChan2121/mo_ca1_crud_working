<?php
# @Date:   2019-11-12T14:57:08+00:00
# @Last modified time: 2019-11-18T19:09:36+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }

}
