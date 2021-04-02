@extends('layouts.mypage')

@section('header')
<header>

</header>
@endsection

@section('content')
<div class="container-fluid">
    <div class="video-container">
        <div class="lesson-title text-center">
            <h2>{{ $lesson->lessons_title }}</h2>
        </div>
        <div class="video-box">
            <iframe allow="camera; microphone; fullscreen; display-capture; autoplay"
                src="https://meet.jit.si/JOIN_HANDS_room01"
                style="height:700px; width:100%; border: 0px;">
            </iframe>
        </div>
    </div>
    @endsection
