<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Bookshop
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">--}}
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">

<div class="wrapper">
    <div class="sidebar" data-color="orange">
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text logo-mini">
                    <i class="now-ui-icons business_bulb-63"></i>
                </a>
                <a href="{{url('/')}}" class="simple-text logo-normal">
                    {{__('lang.bookshop')}}
                </a>
            </div>
            <ul class="nav">
                @can('view-part')
                <li class="@if(\Illuminate\Support\Facades\Request::is('users*')) active @endif">
                    <a href="{{route('users.index')}}">
                        <i class="now-ui-icons business_badge"></i>
                        <p>{{__('lang.users')}}</p>
                    </a>
                </li>
                @endcan
                <li class="@if(\Illuminate\Support\Facades\Request::is('clients*')) active @endif">
                    <a href="{{route('clients.index')}}">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>{{__('lang.clients')}}</p>
                    </a>
                </li>
                <li class="@if(\Illuminate\Support\Facades\Request::is('books*')) active @endif">
                    <a href="{{route('books.index')}}">
                        <i class="now-ui-icons education_agenda-bookmark"></i>
                        <p>{{__('lang.books')}}</p>
                    </a>
                </li>
                <li class="@if(\Illuminate\Support\Facades\Request::is('orders*')) active @endif">
                    <a href="{{route('orders.index')}}">
                        <i class="now-ui-icons text_align-center"></i>
                        <p>{{__('lang.orders')}}</p>
                    </a>
                </li>
                @can('view-part')
                <li class="@if(\Illuminate\Support\Facades\Request::is('role*')) active @endif">
                    <a href="{{route('role.index')}}">
                        <i class="now-ui-icons business_briefcase-24"></i>
                        <p>{{__('lang.role')}}</p>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
    @yield('content')
</div>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>
