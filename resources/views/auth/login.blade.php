@extends('layouts.app')

@section('content')
    <div class="h-screen flex justify-center items-center px-6 py-4">
        <form method="POST" action="{{ route('login') }}" class="p-4 bg-white rounded-lg shadow-lg">
            @csrf

            <label for="email" class="text-gray-700 font-semibold py-2">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="text-red-700 text-sm" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="">
                <label for="password" class="text-gray-700 font-semibold py-2">{{ __('Password') }}</label>

                <input id="password" type="password"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">
            </div>

            <input type="checkbox" name="remember" class="mr-2 leading-tight"
                   id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label for="remember">
                {{ __('Remember Me') }}
            </label>

            <div class="py-4">
                <div>
                    <button type="submit" class="bg-red-300 text-red-800 rounded py-1 px-4 mb-2">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
