<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @toastr_css 

    <style type="text/css">
        .p-footer {
        text-align: center;
        padding: 20px 0 20px 0;
        margin-top: 20px;
        font-size: 17px;
        color: #fff;
        background-color: #4a4848;
        }

        .p-footer-a {
            color: #ffd600;
            text-decoration: none;
        }

        .p-footer-a:hover {
            color: #bda005;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #4267b2;">
            <div class="container" style="margin-top:-15px; margin-bottom: -15px;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" style=" height: 75px; width: auto; position:relative;" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <h2 class='navbar-text navbar-center' style="text-align: center;
                            font-size: 25px;
                            margin-bottom: 0px;
                            padding: 20px 0 20px 0;
                            background-color: #4267b2;
                            color: #fff;
                            font-family: 'Arima Madurai', cursive;
                    ">Cybertech</h2>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><button class="btn">{{ __('Admin') }}</button></a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white; font-size: medium;">
                                    <b>{{ ucfirst(Auth::user()->name) }}</b> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer fixed-bottom">
            <div>
                <p class="p-footer" style="margin-bottom:0px ">Copyright &copy; 2016-2018 @ Cybertech Int (pvt) Ltd. Powered by <a class="p-footer-a" href="http://www.cybertechint.lk" target="_blank">Cybertech Int</a> team.</p>
            </div>
        </footer>
    </div>
    
</body>
@jquery
@toastr_js
@toastr_render
</html>
