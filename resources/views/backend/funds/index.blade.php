@extends('backend.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <b>Funds
                                <a href="{{route('fund.create')}}" class="btn btn-primary btn-sm" style="text-align: center;">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
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
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Icon</th>
                                <th>Description</th>
                                <th>Available</th>
                                <th>Sell rate</th>
                                <th>B.rate</th>
                                <th>S.rate</th>
                                <th>Receive Fund</th>
                                <th colspan = 2 style="width: 20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($funds as $fund)
                                <tr>
                                    <td>{{$fund->id}}</td>
                                    <td>{{$fund->title}} </td>
                                    <td><img src="{{ URL::to('/') }}/funds/{{ $fund->image }}" class="img-thumbnail" width="50" /></td>
                                    <td>{{str_limit($fund->description,'30')}}</td>
                                    <td>{{$fund->available}}</td>
                                    <td>{{$fund->buy}}</td>
                                    <td>{{$fund->buyrate}}</td>
                                    <td>{{$fund->sellrate}}</td>
                                    <td>{{$fund->receive}}</td>
                                    <td><a href="{{ route('fund.edit', $fund->id)}}" class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i></a></td>
                                    <td><form action="{{ route('fund.destroy', $fund->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                {{ $funds->links() }}
            </div>
        </div>
    </div>
@endsection
