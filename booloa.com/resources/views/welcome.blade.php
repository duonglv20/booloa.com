<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
        <title>Booloa.com welcomes you</title>
        <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.js') }}" ></script>
    </head>
    <body>
    	<div class="w3-container">
            <br />

            @if (Route::has('login'))
                    @auth

                    <a href="{{ url('/home') }}" class="w3-btn w3-indigo">Home</a>

                    @else
                    <a href="{{ route('login') }}" class="w3-btn w3-indigo">Login</a>
                    @if (Route::has('register'))

                    <a href="{{ route('register') }}" class="w3-btn w3-indigo">Register</a>
                    @endif
                    @endauth
            @endif
            <br />
            <br />

    	    @include('footer')
        </div>
        <script>
            $(document).ready(function(){
                alert("Hello baby, remember register only once!");
            });
        </script>
    </body>
</html>
