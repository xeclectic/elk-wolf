<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elk & Wolf</title>
        {{-- materialize --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Styles -->
        <style>
            body{
                background-color: #222222;
            }
        </style>
    </head>
    <body>
                    <div id="app">
                        <Root />
                    </div>
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                </div>
            @endif
        </div>
        </div>
        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- materialize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
