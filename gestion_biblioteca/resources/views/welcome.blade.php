<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel con Vue</title>
    </head>
        @vite('resources/css/app.css')
    <body>
        <h1>Laravel con Vue !</h1>
        <div id="app">
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
