<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.clinica', 'Clínica') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://lh3.googleusercontent.com/uTOy0jyJL9T0wmf_Xdi5N2NxpqBlnPK-o_ZXylHgQ-k3bJtZ6ALlnf2czVeCGdpgc76OcAO8qEOtuN8UJ7iTXd_qrIHRx5O8x0t7POD49CkJ5C2q_ptOeg2D9HrWSN3LgY3ImCcETw6t5DuqTFUPfat_ilPs3bFZPdqpOWjWvhwBlZ7HoBf5I1Zh-dg7qJKDykqsh-EM8ayHf2kVQr7svMlx7NbfdOwp1Vle-3vUOw0uvwjHMonu0r0qFUoVcBFChq4KnM4_LJFYxsjTrJVpZvakl0xefnlv5cC2ipENSPo7t6YioNhXj-wrydAYE6hmir2uWyVWqdNkJmq6RuiHQBweNbakxQ7AxJZ1LO9Wqx6KBQsUFSAAlPHU5sPaZA06E70hH_4ZpzAFYiU71PUbNIjCexRAIl5ah_HuIwcumzzf_NdPSrSQ68ZepALumr-v-V4rKzcfbLoNH594OXjs1nIWJznAxUlqHns-GWBUedsb3r-BeavZmD5JKZFpkVZU36uyxCjizTXMu6sf2zAnn49ISzKWrzq2yzuxtbsJpCnlE00qV29GeEYjEBXqPSTV0nM8PMDacvuRy4gjZQgYzR_kU9DMgCG2OOLXqwwoAu1_HxXMbBY9fXNeH2OmyWZReo9ayxmIS2u0MejHQ-wQGgJZFkg-2PD09vWmX96-vH1kmH6XEDqMwP8Ce945KEbW12EphcX-TH9ONgwcpVs9idsj=w251-h66-no?authuser=0" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    </div>
</body>
</html>
