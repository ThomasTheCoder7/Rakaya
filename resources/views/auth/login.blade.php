@extends('layouts.registration')

@section('content')
<div class="container">
    <div class="">
        <div class="px-4">
            
                <div class="card-header text-zinc-300 font-bold py-3 text-2xl">{{ __('Login') }}</div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="text-zinc-300">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror my-2" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="text-zinc-300">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror my-2" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-zinc-300" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="">
                                <button type="submit" class="rounded-md bg-yellow-700/70 py-2 px-4 hover:bg-yellow-900 my-3">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div>
                                    <a class="text-zinc-400 hover:text-zinc-300" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                            </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
