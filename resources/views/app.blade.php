<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Laravel Vuejs</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @vite('resources/js/app.js')
        
    </head>
    <body class="antialiased">
       <div id="app">
         <main-entry />
       </div>
    </body>
</html>
    