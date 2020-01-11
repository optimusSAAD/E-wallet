@extends('backend.home')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center;"><b>Create Charge</b></h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('charge.store') }}">
                @csrf
                <div class="row">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="col-md-3">
                                                <select class="form-control" name="funds_id" id="funds_id">
                                                    <option>Select Fund</option>
                                                    @foreach($funds as $fund)
                                                        <option value="{{$fund->id}}">
                                                            {{$fund->title}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="amount_to">Amount to:</label>
                                                <input type="text" class="form-control" name="amount_to"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="amount_from">Amount From:</label>
                                                <input type="text" class="form-control" name="amount_from"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="discount_rate">Discount:</label>
                                                <input type="text" class="form-control" name="discount_rate"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sending_rate">Charging Rate:</label>
                                                <input type="text" class="form-control" name="sending_rate"/>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="status" value="1" {{ old('status') ? 'checked="checked"' : '' }} name="status">
                                                <label for="status" class="custom-control-label">Fixed Charge</label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Charge</button>
            </form>
        </div>
    </div>
@endsection
