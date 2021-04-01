@extends('layouts.app')

@section('header')

<header class="my-3">

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <div>
                <a class="navbar-brand nav-item logo-font" href="{{ url('/') }}">
                    JOIN HANDS
                </a>
            </div>

            <div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    {{-- <li class="nav-item">
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
                    @if (Auth::check() && auth()->user()->role == 'administrator')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/master') }}"><i class="fas fa-user-shield"></i></a>
                    </li>
                    @elseif(Auth::check() && auth()->user()->role == 'navigator')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/master') }}"><i class="fas fa-user-shield"></i></a>
                    </li>
                    @elseif(Auth::check() && auth()->user()->role == 'user')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/master') }}"><i class="far fa-user"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection

@section('content')
<main>

    <div class="mb-2 text-center bg-image" style="background-image: url('{{ asset('img/test002.jpg')}}');
    height: 400px; width:100%; margin: 0 auto; background-position:center; background-repeat: no-repeat; background-size: 100% auto;">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white pt-2 logo-font">
                    <h1 class="my-3 pt-5 display-1">JOIN HANDS</h1>
                    <h2 class="mb-2 pt-3 pb-5 display-4">- Live your own life -</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">

        <div class="d-flex flex-row justify-content-center text-center pb-4">
            @guest
            <div class="mr-5">
                <a class="btn btn-lg btn-outline-secondary" href="{{ route('login') }}">ログインする</a>
            </div>
            @if (Route::has('register'))
            <div class="ml-5">
                <a class="btn btn-lg btn-outline-secondary" role="button"
                href="{{ route('register') }}">新規会員登録（無料）してレッスンを体験する</a>
            </div>
            @endif
            @else
            <a class="btn btn-lg mt-3 btn-outline-secondary display-1" href="{{ route('lesson.show') }}">レッスン一覧</a>
            @endguest
        </div>

    </div>
</main>
@endsection

@section('footer')
<footer class="mt-3 py-4">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 footer-about wow fadeInUp animated text-center"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <h3 class="pb-3">ABOUT</h3>
                    <img class="logo-footer mb-4" src="{{ asset('img/logo.jpg') }}" alt="ONLINE DOJO"
                        data-at2x="assets/img/logo.png" style="width:150px;height:100px;">
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
