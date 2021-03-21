@extends('layouts.app')

@section('title')
{{ $lesson->lessons_title}}
@endsection

@section('content')
<div class="container">
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
</div>
@endsection
