<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts/head')
    </head>
    <body>
    @include('layouts/header')
    @yield('frontContent')
    @include('layouts/footer')
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('js/active.js')}}"></script>

    @stack('js')
    </body>
</html>
