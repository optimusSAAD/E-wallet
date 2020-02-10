@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! <strong>{{Auth::user()->name}}</strong>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex justify-content-left h-100">
                                    <div class="image_outer_container">
                                        <div class="green_icon"></div>
                                        <div class="image_inner_container">
                                            <img src="{{Auth::user()->image_url}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-center h-100" >
                                    <div class="card" style="width: 18rem;">
                                        <ul class="list-group list-group-flush" style="text-align: center">
                                            <b>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">About You</h5>
                                                        <li class="list-group-item">Name: {{Auth::user()->name}}</li>
                                                        <li class="list-group-item">Email: {{Auth::user()->email}}</li>
                                                        <li class="list-group-item">Phone: {{Auth::user()->phone}}</li>
                                                        <li class="list-group-item">Review Us: {{Auth::user()->review}}</li>
                                                        <li class="list-group-item"><a href="{{'/profile/update'}}" class="btn btn-primary">Edit Profile</a></li>
                                                    </div>
                                                </div>
                                            </b>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
