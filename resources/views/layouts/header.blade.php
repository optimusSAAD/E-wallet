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
                    <marquee direction="scroll">
                        Send= আপনি যা দিবেন, Receive=আপনি যা পেতে চান
                        (Submit পেজে Total due তে যে পরিমান টাকা/ডলার আসে তা পরিশোধ করতে হবে)
                        ১০০ এর উপর অর্ডারে প্রতি ডলারে ১ টাকা, ৩০০ উপর অর্ডারে প্রতি ডলারে ২ টাকা Discount দেওয়া হচ্ছে।
                        অর্ডার করার পর এই Discount পাবেন ।
                        তাই দেরি না করে এখনি অর্ডার করুন 🙂
                    </marquee>
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
                                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
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
