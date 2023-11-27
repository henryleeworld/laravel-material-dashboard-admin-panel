@extends('layouts.guest')
@section('content')
<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url({{ asset('img/auth/login-background.jpg') }});">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Reset password') }}</h4>
                                <!--<p class="text-light p-2">{{ __('You will receive an e-mail in maximum 60 seconds') }}</p>-->
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('status'))
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @elseif (Session::has('email'))

                            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('email') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form role="form" method="POST" action="{{ route('password.email') }}" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" name="email" />
                                </div>
                                @error('email')
                                <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">{{ __('Send') }}</button>
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
