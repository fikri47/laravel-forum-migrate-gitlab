@extends('layouts.app')

@section('title')
Registration
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center form-registration">
  <h1 class="h3 mb-3 fw-normal text-center mt-4">Please {{ __('Register') }}</h1>
  
  <form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div class="form-floating mb-3">
      <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      <label for="name">{{ __('Full Name') }}</label>
      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-floating mb-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      <label for="email">{{ __('Email Address') }}</label>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-floating mb-3">
      <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Masukan Age" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
      <label for="age">{{ __('Age') }}</label>
      @error('age')        
          <strong>{{ $message }}</strong>        
      @enderror
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Masukan Address" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
      <label for="address">{{ __('Address') }}</label>
      @error('address')
       <strong>{{ $message }}</strong>
        
      @enderror
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control @error('bio') is-invalid @enderror" id="bio" placeholder="Masukan bio" name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus>
      <label for="bio">{{ __('bio') }}</label>
      @error('bio')
       <strong>{{ $message }}</strong>
        
      @enderror
    </div>
    
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="new-password">
      <label for="password">{{ __('Password') }}</label>            
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control rounded-bottom" id="password" name="password_confirmation" placeholder="Password" required required autocomplete="new-password">
      <label for="password">{{ __('Confirm Password') }}</label>            
    </div>

    <div class="text-center mt-3">
      <button type="submit" class="btn btn-primary w-100 py-2">
          {{ __('Register') }}
      </button>
      <p class="mt-5 mb-3 text-center text-body-secondary">Already a member? <a href="/login">Please Login</a></p>
    </div>
  </form>
  </div>
</div>
@endsection
