@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/wh1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 faq">
                            <div class="card faq__item">
                                <div class="card__body">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <h2 class="text-center">
                                                    <img src="img/icon/bkash.png" width="36px" height="36px" class="img-circle"> <b>Bkash Personal BDT</b>										&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;
                                                    <img src="img/icon/skrill.png" width="36px" height="36px" class="img-circle"> <b>Skrill USD</b>
                                                </h2><br><div style="text-align: center;"><b>
                                                        Order no: 007		</b></div>						</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Amount send: 5000 BDT</td>
                                            <td colspan="2">Amount receive: 52.63 USD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Exchange rate: 95 BDT = 1 USD</td>
                                            <td colspan="2">Transaction number: 1389873794</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Process type:
                                                <span class="label label-info">Manually</span>
                                            </td>
                                            <td colspan="2">
                                                Status:
                                                <span class="label label-default"><i class="fa fa-check" style="font-size:12px;color: green;"></i> <b>Processed</b></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Created on:
                                                <span class="label label-default">23/11/2019 </span>								</td>
                                            <td colspan="2">
                                                Processed on:
                                                <span class="label label-default">23/11/2019 </span>								</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
