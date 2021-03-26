@extends('layouts.app')

@section('title')
{{ $lesson->lessons_title}}
@endsection

@section('content')

<div class="container">
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
                    <form method="POST" action="/">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lesson->id }}"/>
                        <div class="product__btn-add-cart">
                            <a class="btn btn-lg my-3 btn-outline-secondary" role="button"
                href="{{ route('lesson.session') }}">レッスンを開始する</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>













{{-- <div class="container">
    <div class="product">
        <img src="{{ asset('img/' . $lesson->lessons_photo) }}" class="product-img"/>
        <div class="product__content-header text-center">
            <div class="product__name">
                {{ $lesson->lessons_title }}
            </div>
            <div class="product__price">
                {{ $lesson->lessons_text }}
            </div>
        </div>
        <div>
            <form method="POST" action="/">
                @csrf
                <input type="hidden" name="id" value="{{ $lesson->id }}"/>
                <div class="product__btn-add-cart">
                    <button type="submit" class="btn btn-outline-secondary">レッスンを予約する</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
@endsection
