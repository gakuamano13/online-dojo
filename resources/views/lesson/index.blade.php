@extends('layouts.app')

@section('header')
<div class="header-container">
    <header>
        <nav class="navbar navbar-expand-md navbar-light d-flex flex-column">
            <div class="container" style="max-width:1000px;">
                <div class="d-flex flex-row">
                    <div class="mr-3 d-flex align-items-center">
                        <img src="{{ asset('img/handshake.png')}}" alt="">
                    </div>
                    <div>
                        <a class="navbar-brand nav-item dashboard-logo-font" href="{{ url('/') }}">
                            {{-- JOIN HANDS --}}
                            <img src="{{ asset('img/logo.jpg')}}" alt="logo" style="width:150px;">
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <ul class="list-group list-group-flush d-flex flex-row">
                        <li class="list-group-item bg-light border-0">
                            <a href="#">
                                <img src="{{ asset('img/instagram.png')}}" alt="logo" style="width:20px;">
                            </a>
                        </li>
                        <li class="list-group-item bg-light border-0">
                            <a href="#">
                                <img src="{{ asset('img/facebook.png')}}" alt="logo" style="width:20px;">
                            </a>
                        </li>
                        <li class="list-group-item bg-light border-0">
                            <a href="#">
                                <img src="{{ asset('img/twitter.png')}}" alt="logo" style="width:20px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container" style="padding-top:20px; max-width:1000px;">
                <ul class="navbar-nav ml-auto" style="font-size:12px;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link" href="{{ url('/about') }}">FEATURE</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link" href="{{ url('/about') }}">TEACHER</a>
                    </li>
                    @guest
                    <li class="nav-item pl-3">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item pl-3">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown pl-3">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-light" href="#" role="button"
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
                        <a class="nav-link" href="{{ url('/master') }}"><img src="{{ asset('img/admin.png')}}"
                                alt="logo" style="width:20px;"></a>
                    </li>
                    @elseif(Auth::check() && auth()->user()->role == 'navigator')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/master') }}"><i class="fas fa-user-shield"></i></a>
                    </li>
                    @elseif(Auth::check() && auth()->user()->role == 'user')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/mypage') }}"><i class="far fa-user"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
</div>
@endsection

@section('content')
<main>

    <div class="mb-2 text-center bg-image container" style="background-image: url('{{ asset('img/test003.jpg')}}'); width:1200px; margin: 0 auto; background-position:center; background-repeat: no-repeat; background-size:cover;

        opacity:0.8;">
        <div class="mask">
            <div class="d-flex flex-column">
                <div class="text-white logo-font" style="height: 100px;">
                    <h1 class="my-5 display-4 text-dark top-message id=" top_message">JOIN HANDS</h1>
                </div>
                <div class="pt-5 d-flex justify-content-center" style="height: 300px;">
                    <div class="d-flex flex-column justify-content-center text-center pb-4" style=" padding-left:400px;"">
                        @guest
                        <div class=" my-5">
                        <a class="btn btn-lg btn-outline-dark" href="{{ route('login') }}">ログインする</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="my-3">
                        <a class="btn btn-lg btn-outline-dark" role="button" href="{{ route('register') }}">新規登録（無料）</a>
                    </div>
                    @endif
                    @else
                    <div class="ml-5">
                        <a class="btn btn-lg mt-5 btn-outline-dark" href="{{ route('lesson.show') }}">レッスン一覧</a>
                    </div>
                    @endguest
                </div>

            </div>
            <div style="height: 150px; padding-top:30px;">
                <button class="my-2 top-message catchy-button" data-hover="自分らしく生きていこう"><div>- Live your own life -</div></button>
            </div>
        </div>
    </div>

    </div>


</main>
@endsection

@section('footer')
<footer class="mt-3 py-4">
    <div class="footer-top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between">
                <div class="col-md-4 col-lg-4 footer-about wow fadeInUp animated text-center"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <ul class="navbar-nav d-flecx flex-row">
                        <li class="nav-item pl-3">
                            <a class="nav-link text-secondary" href="{{ url('/about') }}">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-row text-center d-flex flex-row justify-content-center">
                    <a href="#"><img src="{{ asset('/img/up.png') }}" alt=""></a>
                </div>
                <div class="col-md-4 col-lg-4 bg-light ">
                    <small class="text-center text-secondary" style="font-size:12px; padding-left:60px;"> © 2021
                        Copyright : JOIN HANDS All rights reserved.</small>
                </div>
            </div>
        </div>

    </div>



</footer>
@endsection
