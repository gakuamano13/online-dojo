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
        <h3>
            <a href="{{ url('/lists') }}">　List All</a>
            <br>
            <br>
            <a href="{{ url('/lessontop') }}">　Lesson Top</a>
            <br>
            <a href="{{ url('/coursetop') }}">　Course Top</a>
            <br>
            <br>
            <a href="{{ url('/teachertop') }}">　Teacher Top</a>
            <br>
            <a href="{{ url('/navitop') }}">　Navi Top</a>
            <br>
            <a href="{{ url('/studenttop') }}">　Student Top</a>
            <br>
            <br>
            <a href="{{ url('/bookingtop') }}">　Booking Top</a>
            <br>
            <a href="{{ url('/liketop') }}">　Like Top</a>
            <br>
            <br>
            <a href="{{ url('/recommendtop') }}">　Recommend Top</a>
            <br>
            <a href="{{ url('/noticetop') }}">　Notice Top</a>
            <br>
            <a href="{{ url('/helptop') }}">　Help Top</a>
            <br>
            <br>
            <a href="{{ url('/meeting01_navi') }}">　Meeting01_Navi</a>
            <br>
            <a href="{{ url('/meeting01_student') }}">　Meeting01_Student</a>
        </h3>
    </body>
</html>
