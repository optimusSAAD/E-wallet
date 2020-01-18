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
                                                    <input type="text" class="form-control" name="title" value={{ $fund->title }} >
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="title">Icon:</label> </td>
                                        <td colspan="4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <input type="hidden" name="hidden_image" value="{{ $fund->image }}" >
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="description" value={{ $fund->description }} >
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="buy">Sell Rate:</label>
                                                <label>
                                                    <input type="text" class="form-control" name="buy" value={{ $fund->buy }} >
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="account">Receiving Address:</label>
                                                <input type="text" class="form-control" name="account" value={{ $fund->account }} >
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td colspan="4">
                                        <div class="form-group">
                                            <label for="available">Available:</label>
                                            <input type="text" class="form-control" value={{ $fund->available }} name="available">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="form-group">
                                            <label for="buyrate">Buy Rate:</label>
                                            <input type="text" class="form-control" value={{ $fund->buyrate }} name="buyrate">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="form-group">
                                            <label for="sellrate">Sell Rate:</label>
                                            <input type="text" class="form-control" value={{ $fund->sellrate }} name="sellrate">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <label for="receive[]">Receive Funds:</label>
                        @foreach($funds as $fund)
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="receive[]" id="{{$fund->id}}" value="{{$fund->id}}">
                                <label for="{{$fund->id}}"  class="custom-control-label">{{$fund->title}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-success">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
