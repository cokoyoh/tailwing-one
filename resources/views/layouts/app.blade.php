<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div id="app">
    <nav class="bg-white">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-2">
                <h1>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                        {{--<img src="/images/logo.svg" alt="Birdboard ">--}}
                    </a>
                </h1>


                <div class="">
                    <!-- Right Side Of Navbar -->
{{--                    <div class="navbar-nav ml-auto list-none">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
{{--                        @else--}}


{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                      style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        @endguest--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
