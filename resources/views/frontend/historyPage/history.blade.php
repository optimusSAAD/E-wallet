@extends('layouts.app')

@section('content')
    <section class="dorne-welcome-area bg-img bg-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 ">
                            <div class="card body">
                                <table class="table table-striped">
                                    <tbody>

                                    <tr class="table-primary">
                                        <td colspan="5">
                                            <h2 class="text-center">
                                                Transaction History
                                            </h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order Id</td>
                                        <td>Exchange </td>
                                        <td>Status </td>
                                        <td>Date & Time</td>
                                        <td>Details</td>
                                    </tr>
                                    @php($orders = App\User::find($user->id)->orders)
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td >@foreach($funds as $fund)
                                                    @if($order->user_send_fund_id == $fund->id)
                                                        {{$fund->title}}
                                                    @endif
                                                @endforeach With @foreach($funds as $fund)
                                                    @if($order->user_receive_fund_id == $fund->id)
                                                        {{$fund->title}}
                                                    @endif
                                                @endforeach</td>
                                            <td >
                                                @foreach($statuses as $status)
                                                    @if($order->status_id == $status->id)
                                                        {{$status->name}}@endif
                                                @endforeach
                                            </td>
                                            <td > {{$order->updated_at}}</td>
                                            <td >
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-{{$order->id}}">View</button>
                                                <div class="modal fade bd-example-modal-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <table style="" class="wp-list-table fixed striped posts">
                                                                <tbody>
                                                                <tr>
                                                                    <td colspan="4">
                                                                        <h2 class="text-center">@foreach($funds as $fund)
                                                                                @if($order->user_send_fund_id == $fund->id)

                                                                                    <img src="{{$fund->image_url}}" width="50px" height="36px" class="img-circle"> <b>{{$fund->title}}</b>
                                                                                @endif
                                                                            @endforeach
                                                                            with
                                                                            @foreach($funds as $fund)
                                                                                @if($order->user_receive_fund_id == $fund->id)
                                                                                    <img src="{{$fund->image_url}}" width="50px" height="36px" class="img-circle"> <b>{{$fund->title}}</b>
                                                                                @endif
                                                                            @endforeach
                                                                        </h2><br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Amount send: {{$order->user_total_pay}}</td>
                                                                    <td colspan="2">Amount receive: {{$order->user_receive_fund_amount}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Amount Receive Address: {{$order->user_send_fund_account}} </td>
                                                                    <td colspan="2">Transaction Id: {{$order->user_transaction_id}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Status:
                                                                        <a>
                                                                            <b>
                                                                                @foreach($statuses as $status)
                                                                                    @if($order->status_id == $status->id)
                                                                                        {{$status->name}}@endif
                                                                                @endforeach
                                                                            </b>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        Ordered at:
                                                                        <span class="label label-default">
                                                                            {{$order->created_at}}
                                                                        </span>
                                                                    </td>
                                                                    <td colspan="2">
                                                                        Status Updated at:
                                                                        <span class="label label-default">
                                                                            {{$order->updated_at}}
                                                                        </span>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
