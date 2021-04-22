@extends('layouts.app')

@section('content')
<div class="login-container">

    <div class="container-fluid w-75 bg-white login-page">
        <div class="text-center py-1">
            <h2>- ログイン -</h2>
        </div>
        <div class="text-center pt-3">
            <h4 class="login-heading">おかえりなさい！</h4>
        </div>
        <div class="row no-gutter d-flex flex-row justify-content-center">

            <div class="col-md-6 col-lg-6 login-img "style="max-width:500px;">
                <img src="{{ asset('img/login.jpg') }}" ">
            </div>

            <div class="col-md-6 col-lg-6 d-flex align-items-center login-section-form">
                <div class="col-md-12 col-lg-12 d-flex flex-column justify-content-center">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-2">
                            <div class="form-group row mb-10">
                                <div class="col-md-10">
                                    <input id="email" type="email" placeholder="メールアドレス"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-10">

                                <div class="col-md-10">
                                    <input id="password" type="password" placeholder="パスワード"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-10 text-center button-container">
                                <button id="button" type="submit"
                                    class="btn btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 button">
                                    {{ __('ログイン') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れた') }}< /a> @endif --}} </div> </div> </form> </div> </div> </div> <div
                                    class="text-center pt-2 create-account">
                                    <a class="nav-link" href="{{ route('register') }}">アカウント作成はこちらから</a>
                            </div>
                        </div>
                </div>
                @endsection
