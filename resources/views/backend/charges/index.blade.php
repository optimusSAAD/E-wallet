@extends('backend.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <b> Charge
                                <a href="{{route('charge.create')}}" class="btn btn-primary btn-sm" style="text-align: center;">
                                    Add Charge <i class="fa fa-plus" aria-hidden="true"></i>
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
                                    <th>Fund Title</th>
                                    <th>Amount To</th>
                                    <th>Amount From</th>
                                    <th>Charging Rate</th>
                                    <th colspan = 2>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($charges as $charge)
                                    <tr>
                                        <td>{{$charge->id}}</td>
                                        <td>{{$charge->funds->title}} </td>
                                        <td>{{$charge->amount_to}}</td>
                                        <td>{{$charge->amount_from}}</td>
                                        <td>{{$charge->sending_rate}}</td>
                                        <td>
                                            <a href="{{ route('charge.edit', $charge->id)}}" class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('charge.destroy', $charge->id)}}" method="post">
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
                {{ $charges->links() }}
            </div>
        </div>
    </div>
@endsection
