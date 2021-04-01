@extends('layouts.app')

@section('header')

<header class="my-3">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <li class="navbar-brand nav-link">
                <a class="navbar-brand nav-item" href="{{ url('/') }}">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </li>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedule</a>
                    </li> --}}
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} さん <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left text-center" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/mypage') }}">
                                MyPage
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection

@section('content')

<div class="container">
    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card p-4 d-flex flex-column">
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                    <img src="{{ asset('upload/' . $lesson->lessons_photo) }}" class="img-fluid img-thumbnail"
                        style="height:300px; width:300px;" />
                </div>
                <div class="card-body my-3">
                    <h1 class="card-title">{{ $lesson->lessons_title }}</h1>
                    <h2 class="card-text">{{ $lesson->lessons_text }}</h2>
                </div>
                <div class="text-center">
                    <form method="POST" action="/">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lesson->id }}" />
                        <div class="product__btn-add-cart">
                            <a class="btn btn-lg my-3 btn-outline-secondary" role="button"
                                href="{{ route('lesson.session', $lesson->id) }}">レッスンを開始する
                            </a>
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
        <input type="hidden" name="id" value="{{ $lesson->id }}" />
        <div class="product__btn-add-cart">
            <button type="submit" class="btn btn-outline-secondary">レッスンを予約する</button>
        </div>
    </form>
</div>
</div>
</div> --}}
@endsection
