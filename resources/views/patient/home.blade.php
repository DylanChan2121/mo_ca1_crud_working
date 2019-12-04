@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  welcome to patients table <a href={{route('admin.doctors.index')}}>abous us</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                      patient name:  {{Auth::user()->name}}
                        <br>
                      patient email:  {{Auth::user()->email}}
                        <br>
                    You are logged in as an patient!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
