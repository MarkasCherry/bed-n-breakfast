@extends('layouts.auth')

@section('content')
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
                    <h2>Welcome Back.</h2>
                    <p>Please sign in to your account</p>
                    <a href="/register">I do not have an account yet </a>
                </div>

                <!--Form-->
                <div class="form-card">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div id="signin-form" class="login-form">
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="email" type="text" placeholder="Email">
                                    <span class="form-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-mail"><path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                            points="22,6 12,13 2,6"></polyline></svg>
                                                </span>
                                                </span>
                                </div>
                                <x-jet-input-error for="email" class="mt-2"/>
                            </div>
                            <!-- Input -->
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" name="password" type="password" placeholder="Password">
                                    <span class="form-icon">
                                                    <i data-feather="lock"></i>
                                                </span>
                                </div>
                            </div>

                            <div class="setting-item">
                                <label class="form-switch is-primary">
                                    <input type="checkbox" class="is-switch" id="busy-mode-toggle">
                                    <i></i>
                                </label>
                                <div class="setting-meta">
                                    <span>Remember Me</span>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="control login">
                                <button type="submit" class="button h-button is-primary is-bold is-fullwidth is-raised">Sign In</button>
                            </div>


                        </div>
                    </form>
                </div>

                <div class="forgot-link has-text-centered">
                    <a>Forgot Password?</a>
                </div>

            </div>

        </div>

    </div>
@endsection
