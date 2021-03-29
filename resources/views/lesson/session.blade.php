@extends('layouts.mypage')

@section('header')
<header>

</header>
@endsection

@section('content')
<div class="container-fluid">
    <div class="video-container">
        <div class="lesson-title text-center">
            <h3>本日の授業内容</h3>
            <h2>{{ $lesson->lessons_title }}</h2>
            <h4>〜時より開始</h4>
        </div>
        <div class="video-box">
            <iframe allow="camera; microphone; fullscreen; display-capture"
                    src="https://meet.jit.si/kick01">
            </iframe>
        </div>
    </div>
</div>
@endsection
