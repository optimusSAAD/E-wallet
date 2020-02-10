@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Clients Review</h4>
                    </div>
                    <div class="row">
                        @foreach($users as $user)
                            @if($user->review == true)
                            <div class="col-12 col-lg-6" style="height: 200px">
                                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                                     data-wow-delay="0.2s">
                                    <div class="feature-events-thumb">
                                        <img src="{{$user->image_url}}" style="height: 180px; width: 200px" alt="">
                                    </div>
                                    <div class="feature-events-content">
                                        <h5>{{$user->name}}</h5>
                                        <p>{{$user->review}}</p>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
