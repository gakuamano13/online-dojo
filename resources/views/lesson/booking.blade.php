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
    </div>
</div>
@endsection
