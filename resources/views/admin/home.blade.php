@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                   welcome to doctor table <a href="{{route('admin.doctors.index')}}">abous us</a>
                      welcome to patient table <a href="{{route('admin.patients.index')}}">abous us</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
