@extends('welcome')

@section('frontContent')
    <section class="dorne-welcome-area bg-img bg-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <br>
                    <div class="hero-content" style="text-shadow: 0 0 3px #FF0000;">
                        @foreach($extras as $extra)
                        <h4>
                            {{$extra->aboutUsPage}}
                        </h4>
                            @endforeach
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    @endsection
