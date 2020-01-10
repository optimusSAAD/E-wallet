<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>eWalletBD</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="1css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="1fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="1css/jquery-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="1css/style.css"/>
</head>
<body>
<div class="page-content" style="background-color: #736989">
    <div class="wizard-v3-content">
        <div class="wizard-form">
            <div class="wizard-header">
                <h3 class="heading">Exchange Bkash Personal BDT to Skrill USD</h3>
            </div>
            <form class="form-register" action="#" method="post">
                <div id="form-total">
                    <h2>
                        <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                        <span class="step-text">Information</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>
                                <div style="text-align: center;">
                                    <img src="img/icon/bkash.png" width="60px" height="30px">
                                    You Send Us
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="amount1" name="" required>
                                        <span class="label">Input Amount</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3>
                                <div style="text-align: center;">
                                    <img src="img/icon/skrill.png" width="60px" height="30px" >
                                    You Will Receive
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="" name="" disabled="">
                                        <span class="label">50.03$</span>
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
                                    Input Acoount information / Email Here
                                </div>
                            </h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" name="email" id="email" class="form-control" required>
                                        <span class="label">Account /Email</span>
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
                            <h3><center>Confirm Details</center></h3>
                            <div class="form-row table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr class="space-row">
                                        <th>From:</th>
                                        <td id=""> Bkash Personal</td>
                                        <th>Amount:</th>
                                        <td id="amount1"> </td>
                                    </tr>
                                    <tr class="space-row">
                                        <th>To:</th>
                                        <td id=""> Skrill</td>
                                        <th>Amount:</th>
                                        <td id="">50.03$</td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Account E-Mail:</th>
                                        <td colspan="3" id="">
                                            some1@gmail.com
                                        </td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Skriller E-Mail:</th>
                                        <td colspan="3" id="email"></td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Bkash Service Charge:</th>
                                        <td colspan="3" id="">2%</td>
                                    </tr>
                                    <tr class="space-row">
                                        <th colspan="3">Discount:</th>
                                        <td colspan="3" id="">0.00</td>
                                    </tr>
                                    <tr class="space-row" style="background: #FFC300;">
                                        <th colspan="3">Total amount to pay:</th>
                                        <td colspan="3" id="">5100.00</td>
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
                            <h3><div style="text-align: center;">Our Bkash Personal No:</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="" name="" disabled="">
                                        <span class="label">013100000000</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Total amount to pay:</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="" name="" disabled="">
                                        <span class="label" style="background: #FFC300;">5100.00</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                            <h3><div style="text-align: center;">Your Transaction id:</div></h3>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="form-row-inner">
                                        <input type="text" class="form-control" id="" name="" required>
                                        <span class="label">Transaction id</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="1js/jquery-3.3.1.min.js"></script>
<script src="1js/jquery.steps.js"></script>
<script src="1js/jquery-ui.min.js"></script>
<script src="1js/main.js"></script>
</body>
</html>
