@extends('layouts.app')

@section('content')
<div class="my-4">
    @if ( Auth::check() )
    <div class="top__title text-center my-1 pb-5">
        <h2>レッスン一覧</h2>
    </div>

    <div class="container">
        @foreach ($lessons as $lesson)
        <div class="row mb-5">
            <div class="col">
                <div class="card p-4 d-flex flex-row">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/' . $lesson->lessons_photo) }}" class="img-fluid img-thumbnail"
                            style="height:400px; width:400px;" />
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">{{ $lesson->lessons_title }}</h1>
                        <h2 class="card-text">{{ $lesson->lessons_text }}</h2>
                        <a href="{{ route('lesson.detail', $lesson->id) }}" class="btn btn-primary">レッスン詳細</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
