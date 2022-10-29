@extends('layouts.guest')
@section('title',__('Sign Up'))
@section('content')
<div class="text-center mb-5">
    <a href="{{url('/')}}"><img src="{{ asset('assets/images/logo.png') }}" height="80" class='mb-4'></a>
    <h3>{{config('app.name')}} - {{ __('Sign Up') }}</h3>
</div>
<form method="POST" id="register-form">
    <div class="row mb-2">
        <div class="col-12">
            <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                    <label for="name">{{ __('Name') }}</label>
                </div>
                <div class="position-relative">
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                    <div class="form-control-icon">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                    <label for="email">{{ __('Email') }}</label>
                </div>
                <div class="position-relative">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                    <div class="form-control-icon">
                        <i data-feather="at-sign"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                    <label for="password">{{ __('Password') }}</label>
                </div>
                <div class="position-relative">
                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}">
                    <div class="form-control-icon">
                        <i data-feather="lock"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                </div>
                <div class="position-relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    <div class="form-control-icon">
                        <i data-feather="lock"></i>
                    </div>
                </div>
            </div>
        </div>
    </diV>

    <button type="submit" id="form-submit-button" class="btn btn-lg btn-primary w-100"><i class="fas fa-user-circle"></i> {{ __('Sign Up') }}</button>
    <a class="float-start mt-3 text-dark" href="{{ route('login') }}"><i class="fas fa-user-circle"></i> {{ __('Login') }}</a>
</form>
@endsection

@push('scripts-footer')
<script src="{{ asset('assets/js/pages/auth/auth.register.js') }}"></script>
@endpush
