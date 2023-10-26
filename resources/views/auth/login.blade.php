{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container mt-4 pt-4">
        <div class="card mx-auto" style="width: 28rem;">
            <div class="card-header bg-white">
                <h3 class="card-title">Login</h2>
            </div>
            <div class="card-body">
                <x-validation-errors class="mb-4" style="color:crimson;" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="email" class="fs-16 font-weight-bold">Email</label>
                        <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email') }}" placeholder="Please enter your email" id="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="fs-16 font-weight-bold">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" placeholder="Please enter your password" id="password">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-sm form-control">Login</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="card-body fs-14">
                <p>Does not have an account yet? <a href="{{ route('register') }}">Register here!</a></p>
            </div>
        </div>

    </div>
@endsection

