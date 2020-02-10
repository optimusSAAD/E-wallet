@extends('backend.home')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th >Order Id</th>
                            <th>User Name</th>
                            <th>Sent</th>
                            <th>Receive</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>
                                <a>{{$order->user_total_pay}}</a>
                                <br><small>{{$order->user_send_fund_id}}</small>
                            </td>
                            <td>
                                <a>{{$order->user_receive_fund_amount}}</a><br>
                                <small>
                                    {{$order->user_receive_fund_id}}
                                </small>
                            </td>
                            <td>
                                @if($order->status_id == 1)
                                    Pending
                                    @elseif($order->status_id == 2)
                                    Completed
                                    @else
                                    Canceled
                                    @endif
                            </td>
                            <td>
                                {{$order->updated_at}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-{{$order->id}}">View</button>
                                <div class="modal fade bd-example-modal-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <table style="" class="wp-list-table fixed striped posts">
                                                <tbody>
                                                <tr>
                                                    <td style="display: table-cell;">Order Id</td>
                                                    <td style="display: table-cell;">{{$order->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">Sent</td>
                                                    <td style="display: table-cell;">{{$order->user_total_pay}} <sub>{{$order->user_send_fund_id}}</sub></td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">Receive</td>
                                                    <td style="display: table-cell;">{{$order->user_receive_fund_amount}} <sub>{{$order->user_receive_fund_id}}</sub></td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">{{$order->user->name}}'s {{$order->user_receive_fund_id}} address</td>
                                                    <td style="display: table-cell;">{{$order->user_receive_fund_account}}</td>
                                                </tr>

                                                <tr>
                                                    <td style="display: table-cell;">Our's {{$order->user_send_fund_id}} Account</td>
                                                    <td style="display: table-cell;">{{$order->user_send_fund_account}} </td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">{{$order->user->name}}'s {{$order->user_send_fund_id}} id</td>
                                                    <td style="display: table-cell;"> {{$order->user_transaction_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">{{$order->user->name}}'s Contact number (Mobile)</td>
                                                    <td style="display: table-cell;">{{$order->user_contact}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;">{{$order->user->name}}'s Note</td>
                                                    <td style="display: table-cell;"> {{$order->note}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="display: table-cell;" colspan="2">
                                                        <div class="col-3">
                                                            <form action="{{ route('order.update',$order->id)}}" method="post">
                                                                @method('PUT')
                                                                @csrf
                                                                <select class="form-control" name="status_id" id="status_id">
                                                                    <option >Select Status</option>
                                                                    @foreach($statuses as $status)
                                                                        <option value="{{$status->id}}">
                                                                            {{$status->name}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <input type="submit" class="button button-primary">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
