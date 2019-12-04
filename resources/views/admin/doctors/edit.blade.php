@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="class-header">
                    Edit Doctor
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <li>{{$errors}}</li>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $errors)
                            <li>{{$errors}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('admin.doctors.update',$doctor->id)}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$doctor->user->name)}}" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email',$doctor->user->email)}}" />
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number',$doctor->user->phone_number)}}" />
                        </div>

                        <div class="form-group">
                            <label for="postal_address">Postal address</label>
                            <input type="text" class="form-control" id="postal_address" name="postal_address" value="{{old('postal_address',$doctor->user->postal_address)}}" />
                        </div>


                        <div class="form-group">
                            year/month/day
                            <label for="starting_date">starting date</label>
                            <input type="text" class="form-control" id="starting_date" name="starting_date" value="{{old('starting_date',$doctor->starting_date)}}" />
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" class="form-control" id="password" name="password" value="{{old('password',$doctor->user->password)}}" />
                        </div>

                        <div class="form-group">
                            <a href="{{route('admin.doctors.index')}}" class="btn btn-primary">Cancel</a>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>


                        //last left of 27:31 if a error pops up mite be because your missing a div or something
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
