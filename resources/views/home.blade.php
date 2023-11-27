@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">{{ __('Dashboard') }}</h6>
                </div>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p class="text-sm mb-0">
                        {{ __('You are logged in!') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
