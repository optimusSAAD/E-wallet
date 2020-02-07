<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>eWalletBD</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('multi/css/roboto-font.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('multi/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('multi/css/jquery-ui.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('multi/css/style.css')}}"/>
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
                    <form  method="post" class="form-register" action="{{ route('order.store') }}">
                        @csrf
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
                                            <input id="user_send_fund_id" type="text" class="form-control"
                                                   name="user_send_fund_id" value="{{$r->id}}" hidden>
                                            <label class="form-row-inner">
                                                <input id="user_send_fund_amount" type="number" class="form-control"
                                                       name="user_send_fund_amount" required>
                                                <span class="label">Input Amount</span>
                                                <span class="border"></span>
                                            </label>
                                            <label for="fixed_amount">
                                                <input type="number" value="{{$receive->buy}}" class="form-control"
                                                       id="fixed_amount" hidden>
                                            </label>
                                        </div>
                                    </div>
                                    <h3>
                                        <div style="text-align: center;">
                                            <img src="{{$receive->image_url}}" width="30px" height="30px">
                                            You Will Receive
                                        </div>
                                    </h3>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <input id="user_receive_fund_id" type="text" class="form-control"
                                                   name="user_receive_fund_id" value="{{$receive->id}}" hidden>
                                            <label class="form-row-inner">
                                                <input type="number" class="form-control" id="user_receive_fund_amount"
                                                       name="user_receive_fund_amount" readonly />
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
                                                <input type="text" name="user_receive_fund_account"
                                                       id="user_receive_fund_account" class="form-control" required>
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
                                    <h3>
                                        <div style="text-align: center;">Confirm Details</div>
                                    </h3>
                                    <div class="form-row table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr class="space-row">
                                                <th>Sending:</th>
                                                <td id=""><b>{{$r->title}}</b></td>
                                                <td style="font-weight: bold; font-size: 16px"
                                                    id="user_send_fund_amount-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Receiving:</th>
                                                <td id=""><b>{{$receive->title}}</b></td>
                                                <td style="font-weight: bold; font-size: 16px"
                                                    id="user_receive_fund_amount-val">
                                                </td>
                                            </tr>
                                            <tr class="space-row">
                                                <th colspan="2">{{$receive->title}} Account:</th>
                                                <td colspan="2" style="font-weight: bold; font-size: 16px"
                                                    id="user_receive_fund_account-val">
                                                </td>
                                            </tr>
                                            @php($charges = \App\Fund::find($r->id)->charges)
                                            @foreach($charges as $charge)
                                                <tr class="space-row">
                                                    <th colspan="2">{{$r->title}} Charge:</th>
                                                    <td colspan="2">
                                                        <b>
                                                            <label for="fixed_amount">
                                                                <input type="number" value="{{$charge->sending_rate}}"
                                                                       class="form-control" id="charge" name="charge"
                                                                       hidden>
                                                            </label>{{$charge->sending_rate}}
                                                        </b>
                                                    </td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th colspan="2">Discount:</th>
                                                    <td colspan="2"><b>
                                                            <label for="fixed_amount">
                                                                <input type="number" value="{{$charge->discount_rate}}"
                                                                       class="form-control" id="discount"
                                                                       name="discount" hidden>
                                                            </label>{{$charge->discount_rate}}</b>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="space-row" style="background: #FFC300;">
                                                <th colspan="2"><b>Total amount to pay:</b></th>
                                                <td colspan="2" >
                                                    <input style="width: 100%; font-weight: bold; font-size: 16px" type="number" class="form-control" id="user_total_pay"
                                                           name="user_total_pay" readonly />
{{--                                                    <input style="width: 100%; font-weight: bold; font-size: 16px" type="number" id="user_total_pay" name="user_total_pay" disabled/>--}}
                                                </td>
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
                                    <h3>
                                        <div style="text-align: center;">Total amount to pay</div>
                                    </h3>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2"
                                             style="background: #FFC300; text-align: center; padding: 18px; width: 90%">
                                            <b><span class="form-row-inner" id="user_total_pay-val"></span></b>
                                            <input type="number" class="form-form-row-inner" id="user_total_pay-val" name="user_receive_fund_amount" hidden>
                                        </div>
                                    </div>
                                    <h3>
                                        <div style="text-align: center;">Our {{$r->title}} Account:</div>
                                    </h3>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="" name="" disabled="">
                                                <span class="label"><b>{{$r->account}}</b></span>
                                                <span class="border"></span>
                                            </label>
                                            <input type="text" class="form-control" id="user_send_fund_account" name="user_send_fund_account" value="{{$r->account}}" hidden>
                                        </div>
                                    </div>
                                    <h3>
                                        <div style="text-align: center;">Your {{$r->title}} account</div>
                                    </h3>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="user_transaction_id"
                                                       name="user_transaction_id" required>
                                                <span class="label">Account id/number</span>
                                                <span class="border"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <h3>
                                        <div style="text-align: center;">Your Contact No</div>
                                    </h3>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="user_contact"
                                                       name="user_contact" required>
                                                <span class="label">Contact No</span>
                                                <span class="border"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <h3>
                                        <div style="text-align: center;">Note(if any)</div>
                                    </h3>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="note" name="note">
                                                <span class="label">Note</span>
                                                <span class="border"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="status" name="status" value="0" hidden>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <button class="btn" type="submit" >Submit</button>
                    </form>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
<script src="{{asset('multi/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('multi/js/jquery.steps.js')}}"></script>
<script src="{{asset('multi/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('multi/js/main.js')}}"></script>
</body>
</html>
