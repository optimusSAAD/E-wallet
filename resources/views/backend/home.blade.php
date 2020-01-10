<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('backend.header')
    <section>
        <div class="content-wrapper">
            <div class="content-header">
                @yield('content')
            </div>
        </div>
    </section>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    <footer class="main-footer">
        @include('backend.footer')
    </footer>
</div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
@stack('js')
</body>
</html>
