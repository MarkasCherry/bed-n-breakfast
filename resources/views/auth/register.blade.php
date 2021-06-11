@extends('layouts.auth')

@section('content')
    {{--TODO: firstname, lastname, email, phonenumber, password--}}
    <div class="auth-wrapper-inner is-single">

        <!--Fake navigation-->
        <div class="auth-nav">
            <div class="left"></div>
            <div class="center">
                <a href="/" class="header-item">
                    <img style="width:64px;" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="right">
            </div>
        </div>

        <!--Single Centered Form-->
        <div class="single-form-wrap">

            <div class="inner-wrap">
                <!--Form Title-->
                <div class="auth-head">
                    <h2>{{ __('Create your account') }}</h2>
                </div>

                <!--Form-->
                <div class="form-card">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div id="signin-form" class="login-form">
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="name" type="text" placeholder="First name">
                                    <span class="form-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-user"><path
                                                            d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                            cx="12" cy="7" r="4"></circle></svg>
                                                </span>
                                </div>
                                <x-jet-input-error for="name" class="mt-2"/>
                            </div>
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="lastname" type="text" placeholder="Last name">
                                    <span class="form-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-user"><path
                                                            d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                            cx="12" cy="7" r="4"></circle></svg>
                                                </span>
                                </div>
                                <x-jet-input-error for="lastname" class="mt-2"/>
                            </div>
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="email" type="text" placeholder="Email Address">
                                    <span class="form-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-mail"><path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                            points="22,6 12,13 2,6"></polyline></svg>
                                                </span>
                                </div>
                                <x-jet-input-error for="email" class="mt-2"/>
                            </div>
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="phone" type="text" placeholder="Phone number">
                                    <span class="form-icon">
                                              <i class="fas fa-phone-alt"></i>
                                                </span>
                                </div>
                                <x-jet-input-error for="phone" class="mt-2"/>
                            </div>
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="password" type="password" placeholder="Password">
                                    <span class="form-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-lock"><rect x="3" y="11" width="18"
                                                                                            height="11" rx="2"
                                                                                            ry="2"></rect><path
                                                            d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                </span>
                                </div>
                                <x-jet-input-error for="password" class="mt-2"/>
                            </div>

                            <div class="setting-item">
                                <div class="setting-meta">
                                    <a href="/login">{{ __('I already have an account') }} </a>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="control login">
                                <button type="submit" class="button h-button is-primary is-bold is-fullwidth is-raised">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
