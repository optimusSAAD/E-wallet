@extends('backend.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <b>Extra
                                <a href="{{route('extra.create')}}" class="btn btn-primary btn-sm" style="text-align: center;">
                                    Add Extra <i class="fa fa-plus" aria-hidden="true"></i>
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
                                <th>Front Slider</th>
                                <th>AboutUs Page</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($extras as $extra)
                                <tr>
                                    <td>{{$extra->id}}</td>
                                    <td>{{$extra->frontSlider}} </td>
                                    <td>{{$extra->aboutUsPage}}</td>
                                    <td>
                                        <img src="{{ URL::to('/') }}/images/{{ $extra->image }}" class="img-thumbnail" width="75" />
                                    </td>
                                    <td>
                                        <a href="{{ route('extra.edit', $extra->id)}}" class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('extra.destroy', $extra->id)}}" method="post">
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

    </div>
@endsection
