<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TopPage</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>Master Top</h1>
        <a href="{{ url('/lessontop') }}">Lesson Top</a>
        <a href="{{ url('/teachertop') }}">Teacher Top</a>
        <a href="{{ url('/navitop') }}">Navi Top</a>
        <a href="{{ url('/meeting') }}">Meeting</a>
        <br>
        <a href="{{ url('/studenttop') }}">Student Top</a>
        <a href="{{ url('/recommendtop') }}">Recommend Top</a>
        <a href="{{ url('/noticetop') }}">Notice Top</a>
        <a href="{{ url('/helptop') }}">Help Top</a>
    </body>
</html>
