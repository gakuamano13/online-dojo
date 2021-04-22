@extends('layouts.app')

@section('header')

<header class="my-3">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <div class="navbar-brand nav-link d-flex flex-row justify-content-between w-100">
                <div class=>
                    <a class="navbar-brand nav-item" href="{{ url('/') }}">{{ config('app.name') }}
                    </a>
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item">
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
                        <a class="nav-link logo-font" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
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
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection

@section('content')
<div class="my-4">
    @if ( Auth::check() )
    <div class="top__title text-center my-1 pb-5">
        <h2>レッスン一覧</h2>
    </div>

    <div class="container d-flex flex-wrap">
        @foreach ($lessons as $lesson)
        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
            <div class="card p-3 d-flex flex-column">
                <div class=" hover-overlay ripple text-center py-3" data-mdb-ripple-color="light">
                    <img src="{{ asset('upload/' . $lesson->lessons_photo) }}" class="img-fluid img-thumbnail"
                        style="height:200px; width:250px;" />
                </div>
                <div class="card-body d-flex flex-column">
                    <div>
                        <h5 class="card-title text-center">{{ $lesson->lessons_title }}</h5>
                    </div>
                    <div>
                        <h6 class="card-text text-center">{{ $lesson->lessons_text }}</h6>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('lesson.detail', $lesson->id) }}"
                            class="btn btn-lg btn-outline-primary ">レッスン詳細</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
