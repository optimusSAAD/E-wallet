@extends('welcome')
@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay"
             style="background-image: url({{asset('img/bg-img/wh1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="listings-grid">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="btn btn"
                                     style="text-align: center; background: #3949AB; font-size: 16px; color: white; width: 100%; height:40px;">
                                    <strong>
                                        <i class="fa fa-arrow-down"></i>
                                        Send
                                        <span style="font-size:9px; color: yellow;">
                                        Click Send Currency*
                                    </span>
                                    </strong>
                                </div>
                                <div class="listings-grid_item">
                                    <div class="group" id="list-group-1" style="height: 400px; overflow: auto;">
                                        @foreach($funds as $fund)
                                            <a href="javascript:void(0);" onclick="switchVisible({{ $fund->id }});"
                                               class="list-group-item">
                                                <img src="{{ $fund->image_url }}" width="32px"
                                                     height="32px"> {{$fund->title}}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 receive_fund" id="div1">
                                <div class="btn btn"
                                     style="text-align: center; background: #3949AB; font-size: 16px; color: white; width: 100%; height:40px;">
                                    <strong>Receive</strong>
                                </div>
                                <div class="listings-grid__item">
                                        <span id="list-group-2">
                                            <a href="javascript:void(0);" class="list-group-item">First choose from where you want                                              to exchange.
                                            </a>
                                            <div class="list-group-item"
                                                 style="background-image: linear-gradient(rgba(0,100,0,0), #0667d0);">
                                                <span style="color: blue; font-size: 18px;">
                                                    <strong><b>News:</b></strong>
                                                </span>
                                                <span
                                                    style="color: #b30000; font-size: 16px; text-align: justify; font-weight:400; text-justify: inter-word;">
                                                    Welcome to e-Wallet E-Currency Exchanger.
                                                    We are very happy to work with you.
                                                    Thanks to be with us in this last 4 years.
                                                </span>
                                                <br>
                                            </div>
                                            <img src="{{asset('/img/core-img/e.jpg')}}">
                                        </span>
                                </div>
                            </div>
                            @foreach($receives as $fund_id => $receive)
                                <div class="col-md-6 col-lg-6 receive_fund" id="receive_fund_{{ $fund_id }}" style="display: none">
                                    <div class="btn btn"
                                         style="text-align: center; background: #3949AB; font-size: 16px; color: white; width: 100%; height:40px;">
                                        <strong>Receive</strong>
                                    </div>
                                    <div class="" id="array" style="{{--height: 200px; overflow: auto;--}}">
                                        @php $receives = \App\Fund::whereIn('id', $receive)->get(); @endphp
                                        @foreach($receives as $r)
                                            <a href="/multi" class="list-group-item">
                                                <p>
                                                    <img src="{{ $r->image_url  }}" width="32px"
                                                         height="32px"> {{ $r->title  }}
                                                    <span class="pull-right text text-muted hidden-xs hidden-sm"
                                                          style="font-size:11px;">
                                                <small>Reserve: {{ $r->available }}<br>Exchange rate: {{ $r->buyrate }}</small>
                                            </span>
                                                </p>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-3 col-lg-3">
                                <div class="btn btn"
                                     style="text-align: center; background: #3949AB; font-size: 16px; color: white; width: 100%; height:40px;">
                                    <strong>Reserve Now</strong>
                                </div>

                                <div class="listings-grid__item"
                                     style="background: white;">
                                    @foreach($funds as $fund)
                                        <br>
                                        <div class="col-md-12" style="margin-bottom:8px;">
                                            <img src="{{ $fund->image_url }}" width="32px"
                                                 height="32px">
                                            <span class="text"
                                                  style="margin-left:5px; color: black; font-size: 16px; font-family: Arial;">
                                            <strong> {{$fund->title}} </strong>
                                        </span>
                                            <br>
                                            <span class="label label-success"
                                                  style="margin-left:40px;  color: #288671; font-size: 14px; font-family: Arial,serif">
                                            <strong>
                                                Available Funds: {{$fund->available}}
                                            </strong>
                                            <br>
                                            <strong>
                                                Buying rate: {{$fund->buyrate}}
                                            </strong>
                                            <br>
                                            <strong>
                                                Selling rate: {{$fund->sellrate}}
                                            </strong>
                                        </span>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
    </section>
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="about-content text-center">
                        <h2>
                            Our Services
                        </h2>
                    </div>
                    <div class="col-12" style="background-color: #1abc9c;">
                        <div style="text-align: center;">
                            <div>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="catagory-content">
                                                <img src="img/core-img/1.png" alt="" width="60" height="60">
                                                <a>
                                                    <h3>Account Problem</h3>
                                                    <h5>If you need any types of help, then you can contact with
                                                        us.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="catagory-content">
                                                <img src="img/core-img/icon-4.png" alt="" width="60" height="60">
                                                <a>
                                                    <h3>Account Problem</h3>
                                                    <h5>If you need any types of help, then you can contact with
                                                        us.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="catagory-content">
                                                <img src="img/core-img/icon-4.png" alt="" width="60" height="60">
                                                <a>
                                                    <h3>Account Problem</h3>
                                                    <h5>If you need any types of help, then you can contact with
                                                        us.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="catagory-content">
                                                <img src="img/core-img/icon-4.png" alt="" width="60" height="60">
                                                <a>
                                                    <h3>Account Problem</h3>
                                                    <h5>If you need any types of help, then you can contact with
                                                        us.</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="about-content text-center">
                        <h2>
                            Exchange Status
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info" style="height: 165px; width: 130px;">
                                <div class="inner">
                                    <h3>150</h3>

                                    <h5>Exchange Completed Today</h5>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success" style="height: 165px; width: 130px;">
                                <div class="inner">
                                    <h3>53</h3>

                                    <h5>Total Feedback</h5>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning" style="height: 165px; width: 130px;">
                                <div class="inner">
                                    <h3>44</h3>

                                    <h5>New Members</h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger" style="height: 165px; width: 130px;">
                                <div class="inner">
                                    <h3>65</h3>

                                    <h5>Total Exchange</h5>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-exchange"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->
    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100"
             style="background-image: url({{asset('img/bg-img/hero-2.jpg')}});">
        <div class="container">
            <div class="col-12">
                <div class="btn btn"
                     style="text-align: center; background: #3949AB; font-size: 16px; color: white; width: 100%; height:40px;">
                    <strong><span class="btn btn" style="background: #0667d0;">Latest Exchanges!</span></strong></div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section featureds" style="background: white;">
                                <h4>
                                    <div style="text-align: center;">
                                        <img src="img/sign/right.png"
                                             style="width: 30px; height: 30px; padding-left: 5px;">Completed Exchanges
                                    </div>
                                </h4>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <div
                                            style="border: 4px solid #00a651; height: 600px; overflow: scroll; background: white;">
                                            <table class="table" style="border: 0;">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">
                                                            <span style="color: #3949ab">Username
                                                            </span>
                                                    </th>
                                                    <th colspan="2">
                                                        <span style="color: #3949ab">Send</span>
                                                    </th>
                                                    <th colspan="2">
                                                            <span style="color: #3949ab">Receive
                                                            </span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                ismaillk3700
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        2000.0
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        20.619
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                Touhid076
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        1,100.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        11.340 <sub>(Skrill(instant))</sub>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                Bigbashnurul1
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        1,400.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        14.433 <sub>(Skrill(instant))</sub>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section featureds" style="background: white;">
                                <h4>
                                    <div style="text-align: center;">
                                        <img src="img/sign/pending.jpg" style="width: 50px; height: 30px; ">
                                        Pending Orders
                                    </div>
                                </h4>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <div style="border: 4px solid #00a651; height: 240px; overflow: scroll;">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <span style="color: #3949ab">Username</span>
                                                    </th>
                                                    <th colspan="2">
                                                        <span style="color: #3949ab">Send</span>
                                                    </th>
                                                    <th colspan="2">
                                                        <span style="color: #3949ab">Receive</span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                arkosarker
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        460.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        5.000 <sub>(Perfect Money)</sub>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                delwar
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        3,200.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        32.990 <sub>(Skrill(instant))</sub>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                Badhon007
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        9,747.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        100.485 <sub>(Neteller (instant))</sub>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="section featureds" style="background: white;">
                                <h4>
                                    <center>
                                        <img src="img/sign/cross.png"
                                             style="width: 30px; height: 30px; padding-left: 5px;">
                                        Canceled Orders
                                    </center>
                                </h4>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <div style="border: 4px solid #00a651; height: 240px; overflow: scroll;">
                                            <table class="table" style="border: 0;">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">
                                                            <span style="color: #3949ab">
                                                                Username
                                                            </span>
                                                    </th>
                                                    <th colspan="2">
                                                            <span style="color: #3949ab">
                                                                Send
                                                            </span>
                                                    </th>
                                                    <th colspan="2">
                                                            <span style="color: #3949ab">
                                                                Receive
                                                            </span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                            <span style="color: #100613">
                                                                TanvirRTurash
                                                            </span></td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        500.000 <sub>(DBBL Bank / Rocket to Bank)</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        5.435<sub>(Perfect Money)</sub>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <span style="color: #100613">
                                                                    Mmahfuzm
                                                                </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        460.000 <sub>(Bkash Agent (Cash out))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        5.000 <sub>(Perfect Money)</sub>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <span style="color: #100613">
                                                                    Mmahfuzm
                                                                </span>
                                                    </td>
                                                    <td>
                                                        <img src="img/sign/bkash.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        460.000 <sub>(Bkash Payment(marchent))</sub>
                                                    </td>
                                                    <td>
                                                        <img src="img/icon/skrill.png" style="width: 50px; ">
                                                    </td>
                                                    <td>
                                                        5.000 <sub>(Perfect Money)</sub>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->
    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50"
             style="background-image: url({{asset('img/bg-img/hero-3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>
                            Clients Review
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-1.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Jazz Concert</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-2.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>DeeJay in the house</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-3.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Theatre Night outside</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-4.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Wine tasting</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="/review">View All Reviews »</a>
            </div>
        </div>
    </section>
@endsection
@push('js')

    <script type="text/javascript">
        function switchVisible(fund_id) {
            $(".receive_fund").hide();
          $("#receive_fund_" + fund_id).show();
        }
    </script>

@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
@endpush
