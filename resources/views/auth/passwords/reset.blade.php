@extends('layouts.guest')
@section('content')
<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('img/auth/login-background.jpg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Change your password') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('password.update', ['token' => $token]) }}" class="text-start">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}" />
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">{{ __('Email') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
                                </div>
                                @error('email')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">{{ __('New password') }}</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                                </div>
                                @error('password')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                </div>
                                @error('password_confirmation')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">{{ __('Change password') }}</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    {{ __('Don\'t have an account?') }}
                                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">{{ __('Sign up') }}</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
