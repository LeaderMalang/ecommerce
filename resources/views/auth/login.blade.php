@extends('layout.master')

@section('content')
<div class="aimeos container auth">
    <div class="row justify-content-center" style="font-family: Roboto Condensed,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;">
        <div class="col-md-8">
            <div class="card " style="    font-size: 2rem;border: 1px solid black;margin: 11rem 0 6rem 0 !important;color:black;"  >
                <div class="card-header" style="padding-left: 20px;line-height:30px;background-color:#282828;color:white">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ airoute('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right " style="padding-top: 1.6rem;text-align:right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" style="border-bottom: 1px solid black; :focus:box-shadow:none" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right" style="padding-top: 1.6rem;text-align:right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password"style="border-bottom: 1px solid black ;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center" style="">
                                <button type="submit"  class="btn btn-primary" style="margin-right:3rem;background: black;border: none;border-radius: 0;font-size: 2.5rem;font-weight: 300;padding: 0.7rem 4rem 0.7rem 4rem;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ airoute('password.request') }}" style="text-decoration: none;border: black 1px solid;border-radius: 0;font-size: 2rem;font-weight: 400;padding: 0.7rem 2.5rem 0.7rem 2.5rem;color: black;">
                                        {{ __('Forgot Password') }}
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
