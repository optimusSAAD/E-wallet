<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <style>
                        marquee {
                            width: 50%;
                            padding: 10px 0;
                            background-color: lightblue;
                        }
                    </style>
                    <input value="{{$extras = App\Extra::all()}}" hidden>
                    @foreach($extras as $extra)
                    <marquee direction="scroll">
                        {{$extra->frontSlider}}
                    </marquee>
                    @endforeach
                    <!-- Nav -->
                    <br>
                    <div class="collapse navbar-collapse" id="dorneNav">
                        <ul class="navbar-nav mr-auto" id="dorneMenu">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Exchange</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tutorial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact Us</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/user/dashboard') }}">Home</a>
                                    </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
