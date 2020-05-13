<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elk & Wolf</title>
        <link rel="icon" href="https://mpng.subpng.com/20190710/pac/kisspng-white-tailed-deer-antler-clip-art-transparency-5d2676ba8a9502.0664154215628018505676.jpg" type="image/gif" sizes="50x50">
        {{-- icon library --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- materialize --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js"></script>
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div id="app">
            <Root />
        </div>
                {{-- jquery --}}
             <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
            <script src="{{ asset('js/app.js') }}"></script>
                {{-- materialize --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                {{-- share this --}}
            <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eba10346fa8080012c687aa&product=inline-share-buttons" async="async"></script>
                {{-- Lax --}}
            {{-- <script src="lib/lax.min.js" > --}}
            <script src="https://cdn.jsdelivr.net/npm/lax.js" ></script>
                {{-- animate on scroll --}}
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
</html>
