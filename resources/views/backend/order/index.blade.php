@extends('backend.home')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders
                    <a href="{{route('order.create')}}" class="btn btn-primary btn-sm" style="text-align: center;">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th >Order No.</th>
                            <th>User Name</th>
                            <th>User Contact NO</th>
                            <th>Sent Fund</th>
                            <th>Receive Fund</th>
                            <th>Send Account</th>
                            <th>Receive Account</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->users->name}}</td>
                            <td>{{$order->contact}}</td>
                            <td>
                                <a>{{$order->sending_fund_amount}}</a>
                                <br><small>(Rocket Personal)</small>
                                <br><small>(Send Money)</small>
                            </td>
                            <td>
                                <a>{{$order->receiving_fund_amount}}</a><br>
                                <small>
                                    Skrill(instant)
                                </small>
                            </td>
                            <td>{{$order->sending_fund_amount}}</td>
                            <td>{{$order->receiving_fund_amount}}</td>
                            <td>
                                Cancelled by Admin
                            </td>
                            <td>
                                Last Modified<br>
                                2 hours ago
                            </td>
                            <td>
                                <a href="{{ route('order.edit', $order->id)}}" class="btn btn-primary"><i class="fas fa-hourglass"></i> pending</a>
                                <a href="{{ route('order.edit', $order->id)}}" class="btn btn-success"><i class="fas fa-check"> complete</i></a>

                                <a href="{{ route('order.edit', $order->id)}}" class="btn btn-danger"><i class="fas fa-times"> cancel</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
