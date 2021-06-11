<nav class="fixed-nav-bar">

    <div class="logo-nav">
        <a href="{{ route('home') }}">
            <img style="width:64px;" src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
    </div>

    <div class="top-right links">
        <div class="auth">
            <a class="login" href="{{ route('properties.index') }}">{{ __('OUR PROPERTIES') }}</a>
            <a class="login" href="{{ route('reviews.index') }}">{{ __('REVIEWS') }}</a>
            <a class="login" href="{{ route('contact-us') }}">{{ __('CONTACT US') }}</a>
            <a class="login" href="{{ route('privacyPolicy') }}">{{ __('PRIVACY POLICY') }}</a>
            @guest
                <a class="login" href="{{ route('login') }}">LOGIN</a>
            @else
                <a class="login" href="/user/profile">PROFILE</a>
                <a class="login" href="{{ route('profile.logout') }}">LOGOUT</a>
            @endguest
        </div>
    </div>

    <input type="checkbox" id="menuButton"/>
    <label for="menuButton" style="display: none" class="menu-button-label">
        <div class="white-bar"></div>
        <div class="white-bar"></div>
        <div class="white-bar"></div>
        <div class="white-bar"></div>
    </label>
</nav>

<nav class="the-bass">
    <div class="rela-block drop-down-container">
        <a class="login drop-down-item" href="{{ route('properties.index') }}">{{ __('OUR PROPERTIES') }}</a>
    </div>
    <div class="rela-block drop-down-container">
        <a class="login drop-down-item" href="{{ route('reviews.index') }}">{{ __('REVIEWS') }}</a>
    </div>
    <div class="rela-block drop-down-container">
        <a class="login drop-down-item" href="{{ route('contact-us') }}">{{ __('CONTACT US') }}</a>
    </div>
    <div class="rela-block drop-down-container">
        <a class="login drop-down-item" href="{{ route('privacyPolicy') }}">{{ __('PRIVACY POLICY') }}</a>
    </div>

    @guest
        <div class="rela-block drop-down-container">
            <a class="login drop-down-item" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
        </div>
    @else
        <div class="rela-block drop-down-container">
            <a class="login drop-down-item" href="#">{{ __('PROFILE') }}</a>
        </div>
        <div class="rela-block drop-down-container">
            <a class="login" href="{{ route('profile.logout') }}">{{ __('LOGOUT') }}</a>
        </div>
    @endguest
</nav>
