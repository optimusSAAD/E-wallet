<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>eWalletBD</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('1css/roboto-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('1fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('1css/jquery-ui.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('1css/style.css')}}"/>
</head>
<body>
<div class="page-content" style="background-color: #736989">
    <div class="wizard-v3-content">
        <div class="wizard-form">
            @foreach($send_funds as $fund_id => $r)
            @foreach($receive_funds as $fund_id => $receive )
            <div class="wizard-header">
                <h3 class="heading">Exchange {{$r->title}} with {{$receive->title}}</h3>
            </div>
            <form class="form-register" action="{{ route('order.store') }}" method="post">
                @csrf
                @php
                @endphp
                <div id="form-total">
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                        <span class="step-text">Information</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>
                                <div style="text-align: center;">
                                    <img src="{{$r->image_url}}" width="30px" height="30px">
                                    You Send Us
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input id="user_send_fund_amount" type="text" class="form-control"  name="user_send_fund_amount" required>
                                        <span class="label">Input Amount</span>
                                        <span class="border"></span>
                                    </label>
                                    <label for="fixed_amount">
                                        <input type="text" value="{{$receive->buy}}" class="form-control" id="fixed_amount" name="fixed_amount" hidden>
                                    </label>
                                </div>
                            </div>
                            <h3>
                                <div style="text-align: center;">
                                    <img src="{{$receive->image_url}}" width="30px" height="30px" >
                                    You Will Receive
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="number" class="form-control" id="total_expenses" name="total_expenses" disabled />
                                        <span id="total_expenses"> </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                        <span class="step-text">E-Mail</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>
                                <div style="text-align: center;">
                                    Input {{$receive->title}} Account information / E-Mail Here
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" name="user_receive_fund_account" id="user_receive_fund_account" class="form-control" required>
                                        <span class="label">Account/E-Mail</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                        <span class="step-text">Confirm</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3><div style="text-align: center;">Confirm Details</div></h3>
                            <div class="form-row table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr class="space-row">
                                        <th>Sending:</th>
                                        <td id=""><b>{{$r->title}}</b></td>
                                        <th>Amount:</th>
                                        <td id="user_send_fund_amount"><b> </b></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>Receiving:</th>
                                        <td id=""><b>{{$receive->title}}</b></td>
                                        <th>Amount:</th>
                                        <td id="user_receive_fund_amount"><b>50.03</b></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">{{$receive->title}} Account/E-Mail:</th>
                                        <td colspan="3" id="user_receive_fund_account"><b> </b></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Service Charge:</th>
                                        <td colspan="3" id=""><b>2%</b></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Discount:</th>
                                        <td colspan="3" id=""><b>0.00</b></td>
                                    </tr>
                                    <tr class="space-row" style="background: #FFC300;">
                                        <th colspan="3"><b>Total amount to pay:</b></th>
                                        <td colspan="3" name="user_total_pay" id="user_total_pay"><b>5000</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 4 -->
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                        <span class="step-text">Payment</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3><div style="text-align: center;">Our {{$receive->title}} Account:</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="" name="" disabled="">
                                        <span class="label">{{$receive->account}}</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Total amount to pay</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="user_total_pay" name="user_total_pay" disabled="">
                                        <span class="label" style="background: #FFC300;">5100.00</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Your Transaction id</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="user_transaction_id" name="user_transaction_id" required>
                                        <span class="label">Transaction id/number</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Your Contact No</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="user_contact" name="user_contact" required>
                                        <span class="label">Contact No</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Note (if any)</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="note" name="note">
                                        <span class="label">Note</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
             @endforeach   @endforeach
            </form>
        </div>
    </div>
</div>
<script src="{{asset('1js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('1js/jquery.steps.js')}}"></script>
<script src="{{asset('1js/jquery-ui.min.js')}}"></script>
<script src="{{asset('1js/main.js')}}"></script>
<script>
    $('input').keyup(function(){ // run anytime the value changes
        var firstValue  = Number($('#user_send_fund_amount').val());
        var secondValue = Number($('#fixed_amount').val());
        document.getElementById('total_expenses').value = firstValue * secondValue ;
    });
</script>
</body>
</html>
