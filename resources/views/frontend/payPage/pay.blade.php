@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/wh1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div style="text-align: center;"><span style="font-size:20px; color: bg-success; "><b>Order No: 007</b></span></div>
                    <br>
                    <table class="table table-hover table-light">
                        <tbody>
                        <tr>
                            <td><b>From:</b></td>
                            <td>Bkash Personal</td>
                            <td><b>Amount:</b></td>
                            <td>
                                5000
                            </td>
                        </tr>
                        <tr>
                            <td><b>To</b></td>
                            <td>Neteller USD </td>
                            <td><b>Amount:</b></td>
                            <td> 52.63$ </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>Your e-mail address:</b></td>
                            <td>
                                something@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>Your Neteller e-mail:</b></td>
                            <td>
                                something@neteller.com
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>Bkash service charge: </b></td>
                            <td>2%</td>
                        </tr>
                        <tr>

                            <td colspan="3"><b>Discount:</b></td>
                            <td>00.00 BDT</td>
                        </tr>
                        <tr class="bg-warning">

                            <td  colspan="3"><b>Total amount to PAY: </b></td>
                            <td> <b>5100</b></td>

                        </tr>
                        <tr>
                            <td colspan="3"><input type="button" class="btn btn-danger" value="Cancle" onclick="window.location.href='/'" /> </td>
                            <td><input type="button" class="btn btn-success" value="Order" onclick="window.location.href='/pay'" /></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    @endsection
