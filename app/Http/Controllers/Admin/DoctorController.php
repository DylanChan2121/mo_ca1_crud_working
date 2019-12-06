<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;

use App\Role;

class DoctorController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index')->with([
          'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctors.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name'=> 'required|max:191',
          'email'=> 'required|max:191',
          'phone_number'=> 'required|max:191',
          'postal_address'=> 'required|max:191',
          'starting_date'=> 'required|max:191',
          'password'=> 'required|max:191'


        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->postal_address = $request->input('postal_address');
        $user->password = $request->input('password');
        $user->save();


        $doctor = new Doctor();
        $doctor->starting_date = $request->input('starting_date');
        $doctor->user_id = $user->id;
        $user->roles()->attach(Role::where('name','doctor')->first());
        $doctor->save();

        return redirect()->route("admin.doctors.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor =Doctor::findOrFail($id);

        return view('admin.doctors.show')->with([
          'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $doctor =Doctor::findOrFail($id);

      return view('admin.doctors.edit')->with([
        'doctor' => $doctor
  ]);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor =Doctor::findOrFail($id);

            // $user = User::findOrFail($id);

      $request->validate([
        'name'=> 'required|max:191',
        'email'=> 'required|max:191',
        'phone_number'=> 'required|max:191',
        'postal_address'=> 'required|max:191',
        'starting_date'=> 'required|max:191',
        'password'=> 'required|max:191'
      ]);


      $doctor->user->name = $request->input('name');
      $doctor->user->email = $request->input('email');
      $doctor->user->phone_number = $request->input('phone_number');
      $doctor->user->postal_address = $request->input('postal_address');
      $doctor->user->password = $request->input('password');
      $doctor->starting_date = $request->input('starting_date');
      $doctor->user->save();
      $doctor->save();
      return redirect()->route('admin.doctors.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $doctor = Doctor::findOrFail($id);
      $doctor->user->delete();

      return redirect()->route('admin.doctors.index');
    }
}
