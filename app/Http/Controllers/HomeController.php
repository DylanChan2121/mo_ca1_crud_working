<?php
# @Date:   2019-11-08T17:51:58+00:00
# @Last modified time: 2019-11-19T13:10:49+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $user = $request->user();
      $home = 'patient.home';

      if ($user->hasRole('admin')){
        $home = 'admin.home';
      }

        else  if ($user->hasRole('doctor')){
        $home = 'doctor.home';
      }

      else {
        $home = 'patient.home';
      }
        return redirect()->route($home);
    }
}
