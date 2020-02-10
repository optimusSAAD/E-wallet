@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header">Profile
                    <a href="/profile/update" class="btn btn-primary btn-sm" style="text-align: center;">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                            <div class="d-flex justify-content-left h-100">
                                <div class="image_outer_container">
                                    <div class="green_icon"></div>
                                    <div class="image_inner_container">
                                        <img src="https://i.pinimg.com/originals/43/96/61/439661dcc0d410d476d6d421b1812540.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
