@extends('layouts.app')

@section('header')
<header class="mt-4 pb-5">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <li class="navbar-brand nav-link">
                <a class="navbar-brand nav-item" href="{{ url('/') }}">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </li>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedule</a>
                    </li>
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


                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
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
<main>

    <div class="mb-2 text-center bg-image" style="background-image: url('{{ asset('img/top-image.jpg') }}');
    height: 500px; background-position:center; background-repeat: no-repeat;">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white pt-2">
                    <h1 class="my-5 pt-5 display-1">オンライン道場</h1>
                    <h2 class="mb-2 pt-3 pb-5">力だけではない真の強さを求めて</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="text-center pb-4">
            @guest
            <a class="btn btn-lg mt-1 mb-5 btn-outline-secondary" href="{{ route('login') }}">ログインする</a><br>
            @if (Route::has('register'))
            <a class="btn btn-lg my-3 btn-outline-secondary" role="button"
                href="{{ route('register') }}">新規会員登録（無料）してレッスンを体験する</a>
            @endif
            @else
            <a class="btn btn-lg mt-3 btn-outline-secondary display-1" href="{{ route('lesson.show') }}">レッスン一覧</a>
            @endguest
        </div>

    </div>
</main>
@endsection

@section('footer')
<footer class="mt-5 py-4">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 footer-about wow fadeInUp animated text-center"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <h3 class="pb-3">ABOUT</h3>
                    <img class="logo-footer mb-4" src="{{ asset('img/logo.png') }}" alt="ONLINE DOJO"
                        data-at2x="assets/img/logo.png" style="width:100px;height:100px;">
                </div>
                <div class="col-md-4 col-lg-4 footer-contact wow fadeInDown animated"
                    style="visibility: visible; animation-name: fadeInDown;">
                    <h3 class="pb-3 text-center">CONTACT</h3>
                    <ul class="list-group list-group-flush pl-5">
                        <li class="list-group-item bg-light border-0 ">
                            <p><i class="fas fa-map-marker-alt pr-3"></i> 神奈川県横浜市金沢区白帆5-2</p>
                        </li>
                        <li class="list-group-item bg-light border-0">
                            <p><i class="fas fa-phone pr-3"></i> 090-1234-5678</p>
                        </li>
                        <li class="list-group-item bg-light border-0">
                            <p><i class="fas fa-envelope pr-3 "></i>online_dojo@gmail.com</p>
                        </li>
                    </ul>

                </div>
                <div class="col-md-4 col-lg-3 footer-social wow fadeInUp animated text-center"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <h3 class="pb-3 ">FOLLOW US</h3>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item bg-light border-0"><a href="#"><i class="fab fa-facebook"
                                    style="font-size:40px"></i></a></li>
                        <li class="list-group-item bg-light border-0"><a href="#"><i class="fab fa-twitter"
                                    style="font-size:40px"></i></a></li>
                        <li class="list-group-item bg-light border-0"><a href="#"><i class="fab fa-instagram"
                                    style="font-size:40px"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-center p-3">
        <small> © 2020 Copyright : IZUMI DOJO All rights reserved.</small>
    </div>

</footer>
@endsection
