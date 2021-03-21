@extends('layouts.app')

@section('header')
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid d-flex flex-row">
        <ul class="flex-grow-1 navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Teachers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/mastertop') }}">Master Top</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="p-5 text-center bg-image"
        style="background-image: url('{{ asset('img/top-image.jpg') }}');
        height: 500px; background-position:center; background-repeat: no-repeat;" >
      <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white pt-2">
            <h1 class="mb-3 pt-5 display-1">オンライン道場</h1>
            <h2 class="mb-3 pt-3">力だけではない真の強さを求めて</h2>
            <a class="btn btn-outline-light btn-lg mt-5" href="#!" role="button">レッスンを予約する</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
</header>
@endsection

@section('content')

    <div class="container">
        <div class="top__title text-center">
            All Lessons
        </div>

        @if ( Auth::check() )
        <div class="row d-flex flex-row justify-content-around">

            @foreach ($lessons as $lesson)
                <div class="card p-4">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img  src="{{ asset('img/' . $lesson->lessons_photo) }}"
                        class="img-fluid img-thumbnail" style="height:400px; width:400px;" />
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $lesson->lessons_title }}</h3>
                        <p class="card-text">{{ $lesson->lessons_text }}</p>
                        <a href="{{ route('lesson.show', $lesson->id) }}" class="btn btn-primary">レッスン詳細</a>
                    </div>
                </div>
            @endforeach

        </div>
        @endif

    </div>
@endsection

@section('footer')
<footer class="bg-secondary text-center text-white">
    <div class="container p-4">
        <section class="mb-4">
            <h3>CONTACT</h3>
            <a href="#" class="btn btn-info text-white">メールでのお問い合わせはこちらから</a>
        </section>

        <section class="mb-4">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
              repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
              eum harum corrupti dicta, aliquam sequi voluptate quas.
            </p>
        </section>

        <section class="">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <ul class="flex-grow-1 navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active ">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-white" href="#">Teachers</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Schedule</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Register</a>
                          </li>
                    </ul>
                    <ul class="d-flex flex-row justify-content-between navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                            <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-outline-light btn-floating m-1" href="{{ url('/mastertop') }}" role="button">
                            <i class="fas fa-brain"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
              </nav>
        </section>
    </div>
    <div class="bg-secondary text-center p-3">
        <small> © 2020 Copyright : IZUMI DOJO All rights reserved.</small>
    </div>
</footer>
@endsection


