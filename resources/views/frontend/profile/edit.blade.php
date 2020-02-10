@extends('layouts.app')

@push('css')
    <link href="{{asset('maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">

    <link href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .othertop{margin-top:10px;}
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <legend>Update Your Profile</legend>
                <form method="POST" action="{{route('profile.update.edit')}}"
                      class="form-horizontal" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text"
                                   placeholder="Enter Your name" class="form-control"
                                value="{{Auth::user()->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="email">E-Mail</label>
                            <input id="name" name="email" type="text"
                                   placeholder="Enter Your name" class="form-control"
                                   value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="pic">Upload Your Photo</label>
                            <input id="Upload photo" name="pic" class="input-file" type="file"  value="{{Auth::user()->image_url}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="address">Address</label>
                            <input id="address" name="address" type="text"
                                   placeholder="Address" class="form-control"
                                   value="{{Auth::user()->address}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-md-6" for="phone"></label>
                            <input id="phone" name="phone" type="text"
                                           placeholder="Primary Phone number"
                                           class="form-control" value="{{Auth::user()->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="review">Write A Review</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="10"  id="review"
                                      name="review" value="{{Auth::user()->review}}"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"
            src="{{asset('code.jquery.com/jquery-1.11.1.min.js')}}"
            src="{{asset('js/jquery.js')}}"
            src="{{asset('js/bootstrap.min.js')}}"></script>
@endpush
