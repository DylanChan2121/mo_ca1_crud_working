<?php
# @Date:   2019-11-11T19:41:49+00:00
# @Last modified time: 2019-11-11T20:18:25+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
        $this->middleware('role:doctor');
  }

  public function index()
  {
    return view('doctor.home');
  }

}
