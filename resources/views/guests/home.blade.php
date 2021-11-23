<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Boolflex</title>

        <!-- Foglio di stile -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="text-center pt-5">
            <a href="{{ route('admin.home') }}">Area personale</a>
        </div>

        <!-- Collego Vue tramite id root -->
       <div id="root"></div>

       <!-- Collego file js -->
       <script src="{{ asset('js/front.js') }}"></script>
       
    </body>
</html>
