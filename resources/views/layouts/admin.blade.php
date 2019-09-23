<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                            {{--  <li><a class="nav-link" href="/admin/stadium">Stadium</a></li>  --}}
                            <li><a class="nav-link" href="/admin/calendar">Calendar</a></li>
                            <li><a class="nav-link" href="/admin/match">Match</a></li>
                            <li><a class="nav-link" href="/admin/team">Team</a></li>

                            <li><a class="nav-link" href="/admin/stadium">Stadium</a></li>
                            {{--  <li><a class="nav-link" href="/admin/tournament">Tournament</a></li>  --}}
                            <li><a class="nav-link" href="/admin/daydate">DayDate</a></li>
                            <li><a class="nav-link" href="/admin/day">Day</a></li>
                            <li><a class="nav-link" href="/admin/holidaytype">Holiday Type</a></li>
                            <li><a class="nav-link" href="/admin/dayflag">Day Flag</a></li>
                            <li><a class="nav-link" href="/admin/religion">Religion</a></li>
                            <li><a class="nav-link" href="/admin/app">App</a></li>
                            <li><a class="nav-link" href="/admin/country">Country</a></li>
                            <li><a class="nav-link" href="/admin/area">Area</a></li>
                            <li><a class="nav-link" href="/admin/ramadan">Ramadan</a></li>
                            <li><a class="nav-link" href="/admin/userdevice">Device</a></li>

                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstName }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item" href="{{ route('admin') }}" >
                                      Admin
                                     </a>

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

        <div class="container">

        @yield('back')


        @yield('title')

            @yield('content')
        </div>
    </div>
</body>
</html>
