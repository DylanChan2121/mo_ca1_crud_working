@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            doctors
            <a href="{{route('admin.doctors.create')}}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($doctors) === 0)
              <p> there are no doctors </p>
            @else
              <table id="table-doctors" class="table table-hover">
                <thread>
                  <th>Name</th>
                    <th>Email</th>
                      <th>postal address</th>
                        <th>phone number</th>
                          <th>start date</th>

                            </thread>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr data-id="{{$doctor->id}}">
                                    <td>{{$doctor->user->name}}</td>
                                    <td>{{$doctor->user->email}}</td>
                                    <td>{{$doctor->user->phone_number}}</td>
                                    <td>{{$doctor->user->postal_address}}</td>
                                    <td>{{$doctor->starting_date}}</td>

                                      <td>
                                      <a href="{{ route("admin.doctors.show", $doctor->id) }}" class="btn btn-default">view</a>
                                      <a href="{{ route("admin.doctors.edit", $doctor->id) }}" class="btn btn-warning">Edit</a>
                                      <form style="display:inline" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id)}}">
                                        <form style="display:inline-block" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                              <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                  <button type="hidden" class="form-control btn-danger"> DELETE</a>
                                                  </form>
                                    </td>
                                        </tr>
                                @endforeach
                            </tbody>
                          </table>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div>
    @endsection
