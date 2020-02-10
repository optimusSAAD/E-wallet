@extends('backend.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <b> Status
                                <a href="{{route('status.create')}}" class="btn btn-primary btn-sm" style="text-align: center;">
                                    Add Status <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </b>
                        </h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($statues as $status)
                                <tr>
                                    <td>{{$status->id}}</td>
                                    <td>{{$status->name}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
