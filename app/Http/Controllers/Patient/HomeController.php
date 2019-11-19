<?php
# @Date:   2019-11-11T19:41:29+00:00
# @Last modified time: 2019-11-18T19:48:32+00:00




namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:patient');

  }

  public function index()
  {

    return view('patient.home');


  }

}
