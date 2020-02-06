@extends('backend.home')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reviews</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Reviews</li>
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
                        <th style="width: 15%">
                            Id
                        </th>
                        <th style="width: 45%">
                            Review
                        </th>
                        <th style="width: 15%">
                            Status
                        </th>
                        <th style="width: 15%">
                            Date
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>016554756</td>
                        <td>
                            আমি খুবই আনন্দিত..এরকম একটি ওয়েবসাইটের সাথে যুক্ত হতে পেরে...
                        </td>
                        <td>
                            Pending
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
                                            <h4 class="modal-title">Submitted by "01674858336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <h3>আমি খুবই আনন্দিত..এরকম একটি ওয়েবসাইটের সাথে যুক্ত হতে পেরে...আমি এই সাইটের সাথে লেনদেন করে খুবই সন্তুষ্ট... কারন তারা তাদের লেনদেন খুব দ্রুত সম্পূর্ণ করে...তাদের প্রতিষ্ঠান এর জন্য শুভকামনা রইল..</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <select>
                                                <option value="pending">Pending</option>
                                                <option value="complete">Delete</option>
                                                <option value="cancel">Publish</option>
                                            </select>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>016554756</td>
                        <td>
                            12
                        </td>
                        <td>
                            Pending
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal1">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal1">
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
                    </tr>
                    <tr>
                        <td>016554756</td>
                        <td>
                            34
                        </td>
                        <td>
                            Delete
                        </td>
                        <td>
                            Last Modified<br>
                            2 hours ago
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal3">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal3">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order From "016..8336"</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <h3>
                                                আমি খুবই আনন্দিত..এরকম একটি ওয়েবসাইটের সাথে যুক্ত হতে পেরে...আমি এই সাইটের সাথে লেনদেন করে খুবই সন্তুষ্ট... কারন তারা তাদের লেনদেন খুব দ্রুত সম্পূর্ণ করে...তাদের প্রতিষ্ঠান এর জন্য শুভকামনা রইল..
                                            </h3>
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
@push('js')

    @endpush
