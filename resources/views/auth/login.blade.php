@extends('layouts.app')

@section('title')
Login Page
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center form-login">
    <h1 class="h3 mb-3 fw-normal text-center mt-4">{{ __('Login') }}</h1>
      
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="email">Email address</label>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="current-password">
        <label for="password">Password</label>            
      </div>
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
          {{ __('Remember Me') }}
        </label>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary w-100 py-2">
          {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        @endif
        <p class="mt-5 mb-3 text-center text-body-secondary">Not a registered? <a href="/register">Register Now!</a></p>
      </div>

    </form>
  </div>
</div>
@endsection
