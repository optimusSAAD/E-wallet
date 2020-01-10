@extends('backend.home')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>User Details</b></h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>User name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Posts</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="/admin/user/details" class="button">01674208662</a><br><small><a href="" class="button">delete</a></small></td>
                                <td>John Doe</td>
                                <td>Jd@emial.com</td>
                                <td>-</td>

                            </tr>
                            <tr>
                                <td>013000219</td>
                                <td>Alexander Pierce</td>
                                <td>AP@email.com</td>
                                <td>Hi</td>

                            </tr>
                            <tr>
                                <td>john</td>
                                <td>Bob Doe</td>
                                <td>bd@email.com</td>
                                <td>Approved</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @endsection
@push('js')
