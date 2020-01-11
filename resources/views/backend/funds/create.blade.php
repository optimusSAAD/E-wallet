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
            <form method="post" action="{{ route('fund.store') }}" enctype="multipart/form-data">
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
                                                <label for="title">Title:</label>
                                                <input type="text" class="form-control" name="title"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="title">Icon:</label>
                                        </td>
                                        <td colspan="4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                           <div class="form-group">
                                                <label for="description">Description:</label>
                                                <input type="text" class="form-control" name="description"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="buy">Sell Rate:</label>
                                                <input type="text" class="form-control" name="buy"/>
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
                                                <input type="text" class="form-control" name="available"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="buyrate">Buy Rate:</label>
                                                <input type="text" class="form-control" name="buyrate"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sellrate">Sell Rate:</label>
                                                <input type="text" class="form-control" name="sellrate"/>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            <div class="custom-checkbox">
                                <label for="receive[]">Select Receive Funds</label>
                                @foreach($funds as $fund)
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="receive[]" id="{{$fund->id}}" value="{{$fund->id}}">
                                        <label for="{{$fund->id}}"  class="custom-control-label">{{$fund->title}}</label>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Fund</button>
            </form>
        </div>
    </div>
@endsection
