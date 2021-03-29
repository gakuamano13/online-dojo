@extends('layouts.app')

<div class="login-container">
    @section('content')

    <div class="container-fluid w-50 bg-white login-page">
        <div class="text-center pb-1">
            <h2>- サインイン -</h2>
        </div>
        <div class="text-center pt-2">
            <h4 class="login-heading">アカウントを作成します</h4>
        </div>
        <form method="POST" action="{{ route('register') }}">
            <div class="row no-gutter d-flex flex-row justify-content-center">

                @csrf
                <div class="col-md-7 col-lg-7 login-img">
                    <img src="{{ asset('img/login.jpg') }}" alt="">
                </div>

                <div class="col-md-5 col-lg-5 d-flex align-items-center mt-5">
                    <div class="col-md-12 col-lg-12 d-flex flex-column justify-content-center">
                        <div class="form-group row">

                            <div class="col-md-10 pb-1">
                                <input id="name" type="text" placeholder="お名前"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-1">

                            <div class="col-md-10">
                                <input id="email" type="email" placeholder="メールアドレス"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-1">

                            <div class="col-md-10">
                                <input id="password" type="password" placeholder="パスワード"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <div class="col-md-10">
                                <input id="password-confirm" placeholder="確認用パスワード" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-login btn-block col-6 text-uppercase font-weight-bold mb-2 mx-auto">
                    {{ __('登録する') }}
                </button>
            </div>
        </form>
        <div class="text-center pt-2">
            <a class="nav-link" href="{{ route('login') }}">アカウントを持っている方はこちら</a>
        </div>

    </div>

    @endsection
</div>
