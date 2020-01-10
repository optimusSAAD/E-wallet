@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/wh1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-md-10">
                            <div class="card body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr class="table-primary">
                                        <td colspan="4">
                                            <h2 class="text-center">
                                                Transaction History
                                            </h2><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">1. Bkash -> Neteller</td>
                                        <td colspan="2"><a href="/history" type="button" class="btn btn-success btn-md">Track</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2. Bkash -> Paypal</td>
                                        <td colspan="2"><a href="#" type="button" class="btn btn-danger btn-md">Track</a></td>
                                    </tr>
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
