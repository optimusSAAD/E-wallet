@extends('backend.home')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center;"><b>Update Fund</b></h3>
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
            <form method="POST" action="{{ route('extra.update', $extra->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="title">Front Slider:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="frontSlider" value={{ $extra->frontSlider }} />
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="description">AboutUs Page:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="aboutUsPage" value={{ $extra->aboutUsPage }} />
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Picture </td>
                                        <td colspan="4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <input type="hidden" name="hidden_image" value="{{ $extra->image }}" />
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
                <div style="text-align: center;">
                    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
                </div>
            </form>
        </div>
    </div>
@endsection
