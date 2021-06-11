@extends('layouts.app')

@section('title') Home @endsection

@section('content')
    <div id="huro-app" class="app-wrapper">

        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <div class="minimal-wrapper light">

            <div class="landing-page-wrapper">
                <!-- Hero and Navbar -->
                <div id="huro-landing" class="hero is-fullheight rounded-hero">

                    <div class="absolute-header">
                        <div class="header-inner"
                             style="background: url(https://healthidoseshop.com/wp-content/uploads/2019/01/view-of-mout-fuji-from-red-pagoda-tkyo-japan-uhd-4k-wallpaper.jpg) fixed;
                             background-size: cover;
                             background-position: center center;">
                            <img class="cut-circle light-image-l" src="assets/img/shapes/cut-circle.svg" alt="">
                            <img class="cut-circle dark-image-l" src="assets/img/shapes/cut-circle-dark.svg" alt="">
                        </div>
                    </div>

                    <div class="hero-body has-text-centered">
                        <div class="container">
                            <h1 class="title is-1 is-bold text-primary is-bold" style="color: #ea4673">{{ __('Welcome to our B&B!') }}</h1>
                            <h3 class="subtitle is-4 text-primary"  style="color: #ea4673">{{ __('We hope you are going to have a great time with us') }}</h3>
                            <img class="light-image-l hero-mockup my-slides"
                                 src="https://media-cdn.tripadvisor.com/media/photo-w/0a/a9/d9/4f/spring-in-arashiyama.jpg"
                                 alt="">
                            <img class="light-image-l hero-mockup my-slides"
                                 src="https://media-cdn.tripadvisor.com/media/oyster/1850/0c/3f/58/1c/japanese-room-with-12-tatami-mats.jpg ">
                            <img class="light-image-l hero-mockup my-slides"
                                 src="https://media-cdn.tripadvisor.com/media/photo-o/02/98/f5/6a/filename-02-jpg-thumbnail0.jpg">
                            <img class="light-image-l hero-mockup my-slides"
                                 src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/13659131.jpg?k=5500062511456e7e5069c605b2055b923f70ffc5d49e3ea6af4079a10179b95a&o=&hp=1">
                        </div>
                    </div>

                    <!--Browse properties-->
                    <div class="cta-block" style="padding-left: 20%; padding-right: 20%;">
                        <div class="head-text">
                            <h3>{{ __('Find the place to stay') }}</h3>
                            <p>{{ __('We offer a lot of different rooms you can choose from') }}</p>
                        </div>
                        <div class="head-action">
                            <div class="buttons">
                                <a href="{{ route('properties.index') }}"
                                   class="button h-button is-primary is-rounded is-elevated action-button">{{ __('Browse properties') }}</a>
                            </div>
                        </div>
                    </div>

                    <canvas id="demo-canvas"></canvas>
                </div>

                <!--Stacks Section-->
                <div id="stacks-section" class="section">
                    <div class="container">

                        <!--Title-->
                        <div class="section-title has-text-centered">
                            <h2 class="title is-2">{{ __('Stay with us for Amazing Experience') }}</h2>
                            <h4>{{ __('Welcome to our B&B, we offer one of the best Bed and Breakfast experiences in Kyoto.
                                Relax in our calm and peaceful guest house and enjoy a great start to your day with our lovely fresh breakfast.
                                We’re really looking forward to seeing you.') }}</h4>
                        </div>

                        <!--Boxed Features-->
                        <div class="boxed-features">
                            <div class="flex-card light-bordered hover-inset">
                                <div class="flex-cell is-bordered">
                                    <i class="fas fa-car"></i>
                                    <h3>{{ __('Parking') }}</h3>
                                    <p>{{ __('We can offer you a parking space') }}</p>
                                </div>
                                <div class="flex-cell is-bordered">
                                    <i class="fas fa-wifi"></i>
                                    <h3>{{ __('Free Wi - Fi') }}</h3>
                                    <p>{{ __('You can access WiFi fore free in all apartments') }}</p>
                                </div>
                                <div class="flex-cell is-bordered">
                                    <i class="fas fa-utensils"></i>
                                    <h3>{{ __('Breakfast Variety') }}</h3>
                                    <p>{{ __('You can choose from a lot of different meals which could siut your taste the best!') }}</p>
                                </div>
                                <div class="flex-cell is-bordered no-border-edge">
                                    <i class="fas fa-dumbbell"></i>
                                    <h3>{{ __('Local gym') }}</h3>
                                    <p>{{ __('For a very small fee you can access local gym which is just 5 minutes away') }}</p>
                                </div>
                                <div class="flex-cell">
                                    <i class="fas fa-hand-sparkles"></i>
                                    <h3>{{ __('Room service') }}</h3>
                                    <p>{{ __('If you wish, every single day we can clean up your room at the time that suits you best') }}</p>
                                </div>
                                <div class="flex-cell">
                                    <i class="fas fa-hands-helping"></i>
                                    <h3>{{ __('Friendly neighbourhood') }}</h3>
                                    <p>{{ __('Friendly, quite and welcoming locals will make you feel like at home') }}</p>
                                </div>
                                <div class="flex-cell">
                                    <i class="fas fa-archway"></i>
                                    <h3>{{ __('Cultural experience') }}</h3>
                                    <p>{{ __('Experience japanese styles housing, food, and much other experiences') }}</p>
                                </div>
                                <div class="flex-cell no-border-edge">
                                    <i class="fas fa-virus-slash"></i>
                                    <h3>{{ __('COVID-19 safe place') }}</h3>
                                    <p>{{ __('To ensure the well being of our customers, we ask everyone to provide us negative COVID test') }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        carousel();
    </script>
@endpush
