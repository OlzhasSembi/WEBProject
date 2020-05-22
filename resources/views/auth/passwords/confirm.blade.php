@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" align="center" class="card-header">{{ __('Confirm password') }}</div>

                <div style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" align="center" class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button style="background-color: #0066c0; font-family: 'Barlow Condensed'; font-size: 20px;" type="submit" class="btn btn-primary">
                                    {{ __('Confirm password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="color: #0066c0; font-family: 'Barlow Condensed'; font-size: 20px;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
