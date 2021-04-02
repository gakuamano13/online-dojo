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

<div class="top__title text-center" style="margin-top:50px; margin-bottom:100px;">
    <h2>レッスン詳細</h2>
</div>

<div class="container">
    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-10 card p-4 d-flex flex-row">
            <div class="bg-image hover-overlay ripple col-6" data-mdb-ripple-color="light">
                <img src="{{ asset('upload/' . $lesson->lessons_photo) }}" class="img-fluid img-thumbnail"
                    style="height:200px; width:250px;" />
            </div>
            <div class="card-body pt-5 col-6">
                <div>
                    <h3 class="card-title">{{ $lesson->lessons_title }}</h3>
                </div>
                <div>
                    <h4 class="card-text">{{ $lesson->lessons_text }}</h4>
                </div>
                <div class="">
                    <form method="POST" action="/">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lesson->id }}" />
                        {{-- <div class="product__btn-add-cart">
                            <a class="btn btn-lg my-3 btn-outline-primary" role="button"
                                href="{{ route('lesson.session', $lesson->id) }}">レッスンを開始する
                            </a>
                        </div> --}}
                        <div class="my-3 activate-box">
                            <a class="activate loading-effect" role="button"
                            href="{{ route('lesson.session', $lesson->id) }}">
                                <span>
                                    <svg>
                                        <use xlink:href="#circle">
                                    </svg>
                                    <svg>
                                        <use xlink:href="#arrow">
                                    </svg>
                                    <svg>
                                        <use xlink:href="#check">
                                    </svg>
                                </span>
                                <ul>
                                    <li>レッスンを開始する</li>
                                    <li>Now Loading...</li>
                                    <li>お待たせしました！</li>
                                </ul>
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="circle">
                                    <circle cx="8" cy="8" r="7.5"></circle>
                                </symbol>
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="arrow">
                                    <path d="M2.7008908,5.37931459 L2.7008908,5.37931459 C2.9224607,5.60207651 3.2826628,5.60304283 3.50542472,5.38147293 C3.52232305,5.36466502 3.53814843,5.34681177 3.55280728,5.32801875 L5.34805194,3.02646954 L5.34805194,10.3480519 C5.34805194,10.7081129 5.63993903,11 6,11 L6,11 C6.36006097,11 6.65194806,10.7081129 6.65194806,10.3480519 L6.65194806,3.02646954 L8.44719272,5.32801875 C8.6404327,5.57575732 8.99791646,5.61993715 9.24565503,5.42669716 C9.26444805,5.41203831 9.28230129,5.39621293 9.2991092,5.37931459 L9.2991092,5.37931459 C9.55605877,5.12098268 9.57132199,4.70855346 9.33416991,4.43193577 L6.75918715,1.42843795 C6.39972025,1.00915046 5.76841509,0.960656296 5.34912761,1.32012319 C5.31030645,1.35340566 5.27409532,1.38961679 5.24081285,1.42843795 L2.66583009,4.43193577 C2.42867801,4.70855346 2.44394123,5.12098268 2.7008908,5.37931459 Z"></path>
                                </symbol>
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="check">
                                        <path id="test" d="M4.76499011,6.7673683 L8.2641848,3.26100386 C8.61147835,2.91299871 9.15190114,2.91299871 9.49919469,3.26100386 C9.51164115,3.27347582 9.52370806,3.28637357 9.53537662,3.29967699 C9.83511755,3.64141434 9.81891834,4.17816549 9.49919469,4.49854425 L5.18121271,8.82537365 C4.94885368,9.05820878 4.58112654,9.05820878 4.34876751,8.82537365 L2.50080531,6.97362503 C2.48835885,6.96115307 2.47629194,6.94825532 2.46462338,6.93495189 C2.16488245,6.59321455 2.18108166,6.0564634 2.50080531,5.73608464 C2.84809886,5.3880795 3.38852165,5.3880795 3.7358152,5.73608464 L4.76499011,6.7673683 Z"></path>
                                </symbol>
                            </svg>

                            <!-- dribbble -->
                            <a class="dribbble" href="https://dribbble.com/shots/5709751-Activate-Button" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


