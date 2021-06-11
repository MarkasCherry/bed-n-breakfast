@extends('layouts.app')

@section('title') Privacy Policy @endsection

@push('styles_after')
    <style>
        h1.testimonials-header{
            font-family: "Univers57-Condensed", sans-serif;
            font-size: 18pt;
            line-height: 1.1;
            text-transform: uppercase;
            font-weight: normal;
            padding: 6px;
        }
        section#home-reviews{
            margin: 50px 6px 70px 6px;
            padding: 100px 0;
            font-family: "Univers57-Condensed", sans-serif;
        }
        section#home-reviews h2{
            font-size: 1.75rem;
            text-transform: uppercase;
            margin-bottom: 50px;
        }
        .fa-quote-left{
            padding-right: 10px;
        }
        .fa-quote-right{
            padding-left: 10px;
        }
        section#home-reviews p{
            font-size: 13pt;
        }
        .stars{
            color: #BB8B41;
        }

    </style>
@endpush

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
                            <img class="light-image-l hero-mockup my-slides m-t-50"
                                 src="https://www.casepeer.com/wp-content/uploads/2018/05/Secure_Personal_Injury_Software.jpg"
                                 alt="">
                        </div>
                    </div>

                    <div class="page-content-inner is-webapp">

                        <!--List-->
                        <div class="list-view list-view-v2">

                            <div id="active-items-tab" class="tab-content is-active">
                                <div class="list-view-inner">
                                    <section id="home-reviews" style="margin: 0 20% 0 20%">
                                        <div class="col-sm-10 ml-auto mr-auto text-center">
                                            <h2 class="text-primary has-text-centered">{{ __('Privacy Policy') }}</h2>
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active m-b-50">
                                                        <p class="review-body m-t-10 m-b-5">
                                                            {!! $setting->value ?? null !!}
                                                        </p>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
