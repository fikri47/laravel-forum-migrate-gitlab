@extends('layouts.app')

@section('title')
Reset Password
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="h3 mb-3 fw-normal text-center mt-4">{{ __('Reset Password') }}</h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-floating">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete autofocus>
                <label for="email">Email address</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
        </form>
     </div>
</div>
@endsection
