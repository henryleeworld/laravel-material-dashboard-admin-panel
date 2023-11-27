@extends('layouts.guest')
@section('content')
<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url({{ asset('img/auth/login-background.jpg') }})">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container mt-5">
            <div class="row signin-margin">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Sign in') }}</h4>
                                <!--<div class="row mt-3">
                                    <h6 class="text-white text-center">
                                        <span class="font-weight-normal">{{ __('Email:') }}</span> admin@material.com
                                        <br />
                                        <span class="font-weight-normal">{{ __('Password:') }}</span> secret
                                    </h6>
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa-brands fa-facebook-f text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa-brands fa-github text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa-brands fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                                @csrf @if (Session::has('status'))
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="input-group input-group-outline mt-3">
                                    <label class="form-label">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" name="email" value="" />
                                </div>
                                @error('email')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="input-group input-group-outline mt-3">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <input type="password" class="form-control" name="password" value="" />
                                </div>
                                @error('password')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="form-check form-switch d-flex align-items-center my-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" />
                                    <label class="form-check-label mb-0 ms-2" for="rememberMe">{{ __('Remember me') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">{{ __('Sign in') }}</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    {{ __('Don\'t have an account?') }}
                                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">{{ __('Sign up') }}</a>
                                </p>
                                <p class="text-sm text-center">
                                    {{ __('Forgot your password? Reset your password') }}
                                    <a href="{{ route('password.request') }}" class="text-primary text-gradient font-weight-bold">{{ __('here') }}</a>
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
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function () {
        var text_val = $(".input-group input").val();
        if (text_val === "") {
            $(".input-group").removeClass("is-filled");
        } else {
            $(".input-group").addClass("is-filled");
        }
    });
</script>
@endsection
