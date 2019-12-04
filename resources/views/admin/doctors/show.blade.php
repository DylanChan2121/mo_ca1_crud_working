@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            doctor: {{$doctor->user->name}}

          </div>
          <div class="card-body">

              <table class="table table-hover">
                <tbody>
                  <tr>Name</tr>
                  <td>{{$doctor->user->name}}</td>
                    <tr>Email</tr>
                  <td>{{$doctor->user->email}}</td>
                  <tr>phone number</tr>
                <td>{{$doctor->user->phone_number}}</td>
                <tr>postal address</tr>
              <td>{{$doctor->user->postal_address}}</td>
              <tr>postal address</tr>
            <td>{{$doctor->starting_date}}</td>

                        </tbody>

                          </table>

                          <a href="{{ route("admin.doctors.index", $doctor->id) }}" class="btn btn-default">back</a>
                          <a href="{{ route("admin.doctors.edit", $doctor->id) }}" class="btn btn-warning float-right">Edit</a>
                          <form style="display:inline" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id)}}">
                          <form style="display:inline-block" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id)}}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token()}}">
                          <button type="hidden" class="form-control btn-danger"> DELETE</a>
                          </form>

          </div>
        </div>
      </div>
    </div>
    <div>
    @endsection
