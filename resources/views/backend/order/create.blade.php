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
            <form method="post" action="{{ route('order.store') }}" >
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="col-md-3">
                                                <select class="form-control" name="users_id" id="users_id">
                                                    <option>Users</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">
                                                            {{$user->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="fund_id">ID: </label>
                                                <input type="text" class="form-control" name="fund_id"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="receiving_fund_id">receiving_fund_id:</label>
                                                <input type="text" class="form-control" name="receiving_fund_id"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sending_fund_amount">sending_fund_amount:</label>
                                                <input type="text" class="form-control" name="sending_fund_amount"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="receiving_fund_amount">receiving_fund_amount:</label>
                                                <input type="text" class="form-control" name="receiving_fund_amount"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="sending_account_info">sending_account_info:</label>
                                                <input type="text" class="form-control" name="sending_account_info"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="receiving_account_info">receiving_fund_amount:</label>
                                                <input type="text" class="form-control" name="receiving_account_info"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <label for="contact">Contact:</label>
                                                <input type="text" class="form-control" name="contact"/>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Fund</button>
            </form>
        </div>
    </div>
@endsection
