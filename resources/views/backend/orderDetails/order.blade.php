@extends('backend.home')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 12%">
                            Order No.
                        </th>
                        <th style="width: 12%">
                            User Name
                        </th>
                        <th style="width: 15%">
                            Sent
                        </th>
                        <th style="width: 15%">
                            Receive
                        </th>
                        <th style="width: 15%">
                            Status
                        </th>
                        <th style="width: 15%">
                            Date
                        </th>
                        <th style="width: 12%">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            #007
                        </td>
                        <td>
                            01674858336
                        </td>
                        <td>
                            <a>10,917</a>
                            <br><small>(Rocket Personal)</small>
                            <br><small>(Send Money)</small>
                        </td>
                        <td>
                            <a>80.696</a><br>
                            <small>
                                Skrill(instant)
                            </small>
                        </td>
                        <td>
                            Cancelled by Admin
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order From "01674858336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-hover">

                                                <tbody>
                                                <thead>
                                                </thead>
                                                <tr>
                                                    <td colspan="2">Order Id</td>
                                                    <td>#007</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Sent</td>
                                                    <td>10,917 <small>(Rocket Personal (Send Money))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Receive</td>
                                                    <td>80.696 <small>(Skrill (instant))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your Bkash No.</td>
                                                    <td>01783729050</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Our/Sending email address</td>
                                                    <td>rk12312@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your/Sending mail address</td>
                                                    <td>atikul@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Contact No.</td>
                                                    <td>0189053642</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Note (if any)</td>
                                                    <td>Emargency fast. Thank you.</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <select>
                                                <option value="pending">Pending</option>
                                                <option value="complete">Complete</option>
                                                <option value="cancel">Cancel</option>
                                            </select>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    <tr>
                        <td>
                            #007
                        </td>
                        <td>
                            01674858336
                        </td>
                        <td>
                            <a>10,917</a>
                            <br><small>(Rocket Personal)</small>
                            <br><small>(Send Money)</small>
                        </td>
                        <td>
                            <a>80.696</a><br>
                            <small>
                                Skrill(instant)
                            </small>
                        </td>
                        <td>
                            Cancelled by Admin
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order From "01674858336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-hover">

                                                <tbody>
                                                <thead>
                                                </thead>
                                                <tr>
                                                    <td colspan="2">Order Id</td>
                                                    <td>#007</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Sent</td>
                                                    <td>10,917 <small>(Rocket Personal (Send Money))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Receive</td>
                                                    <td>80.696 <small>(Skrill (instant))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your Bkash No.</td>
                                                    <td>01783729050</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Our/Sending email address</td>
                                                    <td>rk12312@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your/Sending mail address</td>
                                                    <td>atikul@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Contact No.</td>
                                                    <td>0189053642</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Note (if any)</td>
                                                    <td>Emargency fast. Thank you.</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pending
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Pending</button>
                                                    <button class="dropdown-item" type="button">Complete</button>
                                                    <button class="dropdown-item" type="button">Cancle</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #007
                        </td>
                        <td>
                            01674858336
                        </td>
                        <td>
                            <a>10,917</a>
                            <br><small>(Rocket Personal)</small>
                            <br><small>(Send Money)</small>
                        </td>
                        <td>
                            <a>80.696</a><br>
                            <small>
                                Skrill(instant)
                            </small>
                        </td>
                        <td>
                            Cancelled by Admin
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order From "01674858336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-hover">

                                                <tbody>
                                                <thead>
                                                </thead>
                                                <tr>
                                                    <td colspan="2">Order Id</td>
                                                    <td>#007</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Sent</td>
                                                    <td>10,917 <small>(Rocket Personal (Send Money))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Receive</td>
                                                    <td>80.696 <small>(Skrill (instant))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your Bkash No.</td>
                                                    <td>01783729050</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Our/Sending email address</td>
                                                    <td>rk12312@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your/Sending mail address</td>
                                                    <td>atikul@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Contact No.</td>
                                                    <td>0189053642</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Note (if any)</td>
                                                    <td>Emargency fast. Thank you.</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pending
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Pending</button>
                                                    <button class="dropdown-item" type="button">Complete</button>
                                                    <button class="dropdown-item" type="button">Cancle</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #007
                        </td>
                        <td>
                            01674858336
                        </td>
                        <td>
                            <a>10,917</a>
                            <br><small>(Rocket Personal)</small>
                            <br><small>(Send Money)</small>
                        </td>
                        <td>
                            <a>80.696</a><br>
                            <small>
                                Skrill(instant)
                            </small>
                        </td>
                        <td>
                            Cancelled by Admin
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order From "01674858336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-hover">

                                                <tbody>
                                                <thead>
                                                </thead>
                                                <tr>
                                                    <td colspan="2">Order Id</td>
                                                    <td>#007</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Sent</td>
                                                    <td>10,917 <small>(Rocket Personal (Send Money))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Receive</td>
                                                    <td>80.696 <small>(Skrill (instant))</small></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your Bkash No.</td>
                                                    <td>01783729050</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Our/Sending email address</td>
                                                    <td>rk12312@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Your/Sending mail address</td>
                                                    <td>atikul@gmail.com</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Contact No.</td>
                                                    <td>0189053642</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">Note (if any)</td>
                                                    <td>Emargency fast. Thank you.</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pending
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button">Pending</button>
                                                    <button class="dropdown-item" type="button">Complete</button>
                                                    <button class="dropdown-item" type="button">Cancle</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    @endsection
