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
        <iframe allow="camera; microphone; fullscreen; display-capture" src="https://meet.jit.si/kick01" style="height: 800px; width: 100%; border: 0px;"></iframe>
    </body>
</html>
