
<title>{{ __('msg.register') }}</title>    
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <div class="container mt-5 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div 
                class="p-4 rounded text-white"
                dir="rtl"
                style="background: linear-gradient(to left, #14a061, #1eaf6e)"
            >
                <h2 class="text-center">{{ __('msg.register') }}</h2>
                <div class="">
                    <form method="POST" action="{{ route('register', app() -> getLocale()) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-form-label text-md-end">{{ __('msg.new_user_name') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('msg.new_user_name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-form-label text-md-end">{{ __('msg.new_user_email') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="{{ __('msg.new_user_email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-end">{{ __('msg.log_user_pass') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('msg.log_user_pass') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('msg.confirm_pass') }}</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('msg.confirm_pass') }}">
                            </div>
                        </div>

                        {{--  --}}
                        <div class="row mb-3">
                            <div>
                                <input 
                                    name="role"
                                    type="hidden" 
                                    class="form-control" 
                                    value="0"
                                />
                            </div>
                        </div>
                        {{--  --}}

                        <div class="row mb-0">
                            <div class=" text-center">
                                <button type="submit" class="btn btn-success">
                                    {{ __('msg.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

@endsection
