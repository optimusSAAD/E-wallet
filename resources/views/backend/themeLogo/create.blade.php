@extends('backend.home')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center;"><b>Create Fund</b></h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('extra.store') }}" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="frontSlider">Front Slider:</label>
                                                <input type="text" class="form-control" name="frontSlider"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="aboutUsPage">AboutUs Page:</label>
                                                <input type="text" class="form-control" name="aboutUsPage"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Picture </td>
                                        <td colspan="4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
            </form>
        </div>
    </div>
@endsection
