@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/wh1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <table class="table table-hover table-light">


                        <tbody>
                        <tr>

                            <td colspan="3"><b>Our Bkash(Personal) No: </b></td>
                            <td>01304850461</td>
                        </tr>

                        <tr class="bg-warning">

                            <td  colspan="3"><b>Total amount to PAY: </b></td>
                            <td> <b>5100</b></td>

                        </tr>

                        <tr>

                            <td colspan="3"><b>Your Transaction id:</b></td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"></span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Default" placeholder="Your Transaction id"aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div style="text-align: center;">
                        <input type="button" class="btn btn-success btn-lg btn-block" value="confirm" onclick="window.location.href='/track'" />
                    </div>
                </div>
            </div>
    </section>
    @endsection
