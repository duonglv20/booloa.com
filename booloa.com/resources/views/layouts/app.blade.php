<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <title>Booloa.com welcomes you</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}" ></script>
</head>
<body>
	 <div class="w3-container">
                <br />
                <a href="{{ url('/') }}" class="w3-btn w3-indigo">
                    {{ 'Home' }}
                </a>

                <br />
                <br />

                        @guest

                                <a href="{{ route('login') }}" class="w3-btn w3-indigo">{{ 'Login' }}</a>

                            @if (Route::has('register'))

                                    <a href="{{ route('register') }}" class="w3-btn w3-indigo">{{ 'Register' }}</a>

                            @endif
                        @else
                                {{ 'Hello' }} {{ Auth::user()->name }}
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ 'Logout' }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                        @endguest
		<div>
            @yield('content')
        </div>

        <br />
        @include('footer')
	</div>
</body>
</html>
