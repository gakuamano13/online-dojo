<link href="{{ asset('css/main/button.css') }}" rel="stylesheet">

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
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection

@section('content')
<div class="m-5">
    <section class="trial-block" id="ContactUs">
        <div class="">
            <div class="section-title text-center d-flex flex-column">
                {{-- <div>
                    <span class="badge badge-info">Get Started</span>
                </div> --}}
                <div class="mt-3">
                   <button class="sns-button type3">SNS Link</button>
                </div>

            </div>
            <div class="social-overlap process-scetion mt100">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="social-bar">
                            <div class="social-icons iconpad text-center">
                                <a href="#" target="_blank" class="slider-nav-item">
                                    <img src="{{ asset('img/facebook02.png')}}" alt="logo"
                                        style="width:20px; padding-top:15px;">
                                </a>
                                <a href="#" target="_blank" class="slider-nav-item">
                                    <img src="{{ asset('img/twitter02.png')}}" alt="logo"
                                        style="width:20px; padding-top:15px;">
                                </a>
                                <a href="#" target="_blank" class="slider-nav-item">
                                    <img src="{{ asset('img/instagram02.png')}}" alt="logo"
                                        style="width:20px; padding-top:15px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
