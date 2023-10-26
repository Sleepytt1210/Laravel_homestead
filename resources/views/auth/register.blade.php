{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container mt-4 pt-4">
        <div class="card mx-auto" style="width: 28rem;">
            <div class="card-header bg-white">
                <h3 class="card-title">Register</h2>
            </div>
            <div class="card-body">
                @include('common.error')
                <form  method="POST" action="{{ route('register') }}" >
                    @csrf
                    <div class="form-group mt-2">
                        <label for="name" class="fs-16 font-weight-bold">Name</label>
                        <input type="text" name="name" placeholder="Please enter your name" value="{{ old('name') }}" class="form-control form-control-sm" id="name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email" class="fs-16 font-weight-bold">Email</label>
                        <input type="email" name="email" placeholder="Please enter your email" value="{{ old('email') }}" class="form-control form-control-sm" id="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="fs-16 font-weight-bold">Password</label>
                        <input type="password" name="password" placeholder="Please enter your password" class="form-control form-control-sm" id="password">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password_confirmation" class="fs-16 font-weight-bold">Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Please enter your password again" class="form-control form-control-sm" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm w-30">Register</button>
                </form>
            </div>
            <hr>
            <div class="card-body fs-14">
                <p>Already have an account? <a href="{{ route('login') }}">Login here!</a></p>
            </div>
        </div>

    </div>
@endsection

