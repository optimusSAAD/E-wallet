@extends('backend.home')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center;"><b>Update Charge</b></h3>
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
            <form method="post" action="{{ route('charge.update',$charge->id) }}">
                @method('PUT')
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
                                                <label for="amount_to">Amount to:</label>
                                                <input type="text" class="form-control" name="amount_to" value="{{ $charge->amount_to }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="amount_from">Amount From:</label>
                                                <input type="text" class="form-control" name="amount_from" value="{{ $charge->amount_from }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sending_rate">Sending Rate:</label>
                                                <input type="text" class="form-control" name="sending_rate" value="{{ $charge->sending_rate }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="receiving_rate">Receiving Rate:</label>
                                                <input type="text" class="form-control" name="receiving_rate" value="{{ $charge->receiving_rate }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update Charge</button>
            </form>
        </div>
    </div>
@endsection
