@extends('layouts.guest')
@section('content')
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div
                            class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('img/auth/signup.jpg'); background-size: cover;"
                        ></div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">{{ __('Sign Up') }}</h4>
                                <p class="mb-0">{{ __('Enter your name, email and password to register') }}</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                                    </div>
                                    @error('name')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                                    </div>
                                    @error('email')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                    @error('password')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">{{ __('Password confirmation') }}</label>
                                        <input type="password" class="form-control" name="password_confirmation" />
                                    </div>
                                    @error('password_confirmation')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                    @enderror
                                    <!--<div class="form-check form-check-info text-start ps-0 mt-3">
                                        <input class="form-check-input" type="checkbox" value="yes" id="is_agreed" checked />
                                        <label class="form-check-label" for="is_agreed"> {{ __('I agree the ') }}<a href="javascript:;" class="text-dark font-weight-bolder">{{ __('Terms and Conditions') }}</a> </label>
                                    </div>-->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">{{ __('Sign Up') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    {{ __('Already have an account?') }}
                                    <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">{{ __('Sign in') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
