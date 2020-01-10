@extends('backend.home')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Profile</b></h3>
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

                            <tbody>
                            <tr>
                                <td>name:</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="01674208662" disabled></td>
                            </tr>
                            <tr>
                                <td>First name:</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John" disabled></td>
                            </tr>
                            <tr>
                                <td>Last name:</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cena" disabled></td>
                            </tr>
                            <tr>
                                <td>Nick name:</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="01674208662" disabled></td>
                            </tr>
                            <tr>
                                <td>Email</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Johncena@gmail.com" disabled></td>
                            </tr>
                            <tr>
                                <td>Facebook Url:</td>

                                <td colspan="4"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="fb.com/cena92" disabled></td>
                            </tr>
                            <tr>
                                <td>Nid Card</td>

                                <td colspan="4">
                                    <img src="{{asset('dist/img/nid.jpg')}}" class="img elevation-2" width="200" height="100" alt="User Image">
                                </td>
                            </tr>
                            <tr>
                                <td>Profile pic</td>

                                <td colspan="4">
                                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <center><button type="button" class="btn btn-danger btn-lg">Delete this User</button></center>
        <br>
    </div>
    @endsection

@push('js')
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
    @endpush
