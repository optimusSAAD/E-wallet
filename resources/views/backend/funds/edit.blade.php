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
            <form method="POST" action="{{ route('fund.update', $fund->id) }}" enctype="multipart/form-data" >
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
                                                <label for="title">Title:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="title" value={{ $fund->title }} />
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Icon </td>
                                        <td colspan="4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <input type="hidden" name="hidden_image" value="{{ $fund->image }}" />
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="description" value={{ $fund->description }} />
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="buy">We Buy:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="buy" value={{ $fund->buy }} />
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sell">We Sell:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="sell" value={{ $fund->sell }} />
                                                </label>
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
                    <button type="submit" class="btn btn-success">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
