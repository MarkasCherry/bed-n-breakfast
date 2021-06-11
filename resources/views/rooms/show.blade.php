@extends('layouts.app')

@section('content')
    <div class="app-wrapper">
        <div class="app-overlay"></div>
        @include('layouts.header.navigation')
        <div id="edit-profile" class="view-wrapper is-webapp">
            <div class="page-content-wrapper">
                <div class="page-content is-relative tabs-wrapper is-slider is-squared is-inverted">
                    <div class="list-view-toolbar is-webapp">
                        <div class="page-content-wrapper">
                            <form action="{{ route('booking.create') }}" method="GET">
                                @csrf
                                <div class="page-content is-relative">

                                    <div class="page-content-inner">

                                        <!--Lifestyle Dashboard V2-->
                                        <div class="lifestyle-dashboard lifestyle-dashboard-v2">

                                            <div class="dashboard-title is-main">
                                                <div class="left">
                                                    <h2 class="dark-inverted">{{ $room->name }}</h2>
                                                    <p class="h-hidden-mobile">{{ __('Room number: ') . $room->room_number }}</p>
                                                </div>
                                                <div class="right">
                                                    <a class="action-link"
                                                       href="{{ route('properties.show', $room->property) }}">Go back to
                                                        rooms</a>
                                                </div>
                                            </div>

                                            <div class="columns">

                                                <div class="column is-9">

                                                    <div class="columns is-multiline is-flex-tablet-p">

                                                        <!--Card-->
                                                        <div id="lightgallery" class="light-gallery-wrap">
                                                            @foreach($room->getMedia() as $media)
                                                                <a href="{{ $media->getUrl() }}">
                                                                    <img src="{{ $media->getUrl() }}"
                                                                         alt="{{ $room->name }}">
                                                                </a>
                                                            @endforeach
                                                        </div>

                                                        <div class="column is-12">

                                                            <!--Widget-->
                                                            <div class="widget search-widget">
                                                                <div class="field">
                                                                    <h2 class="title is-5 is-narrow m-b-5">{{ __('Description') }}</h2>
                                                                    <div class="control">
                                                                        <p>{!! $room->long_description  !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if (count($errors) > 0)
                                                                <div class="widget search-widget">
                                                                    <div class="field">
                                                                        <h2 class="title is-5 is-narrow m-b-5 text-danger">{{ __('Oops, there was an error!') }}</h2>
                                                                        <div class="control">

                                                                            <ul>
                                                                                @foreach ($errors->all() as $error)
                                                                                    <li class="text-danger">{{ $error }}</li>
                                                                                @endforeach
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="column is-4">
                                                            <!--Widget-->
                                                            <div class="widget search-widget">
                                                                <div class="field">
                                                                    <h2 class="title is-5 is-narrow m-b-20">{{ __('Choose your stay period') }}</h2>
                                                                    <div id="calendar"></div>
                                                                    <input type="hidden" name="check-in" id="check-in">
                                                                    <input type="hidden" name="check-out"
                                                                           id="check-out">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="column is-4">
                                                            <!--Widget-->
                                                            <div class="widget text-widget">
                                                                <div class="field">
                                                                    <h2 class="title is-5 is-narrow m-b-20">{{ __('Choose a number of guests') }}</h2>
                                                                    <div class="control">
                                                                        <div class="h-select is-rounded">
                                                                            <div class="select-box">
                                                                                <span>{{ __('Number of guests') }}</span>
                                                                            </div>
                                                                            <div class="select-icon">
                                                                                <i data-feather="chevron-down"></i>
                                                                            </div>
                                                                            <div class="select-drop has-slimscroll-sm">
                                                                                <div class="drop-inner">
                                                                                    @for ($i = 1; $i <= $room->capacity; $i++)
                                                                                        <div class="option-row">
                                                                                            <input type="radio"
                                                                                                   name="guests_no"
                                                                                                   value="{{ $i }}">
                                                                                            <div class="option-meta">
                                                                                                <span>{{ $i . __(' pers.') }}</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endfor
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Widget-->
                                                            <div class="widget text-widget">
                                                                <div class="field">
                                                                    <h2 class="title is-5 is-narrow m-b-20 has-text-centered">{{ __('Would you like to receive breakfast?') }}</h2>
                                                                    <div class="control">
                                                                        <div class="columns is-centered m-t-5">
                                                                            <x-inputs.switcher name="breakfast">
                                                                                <x-slot name="title"></x-slot>
                                                                            </x-inputs.switcher>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="column is-4">
                                                            <!--Widget-->
                                                            <div class="widget search-widget">
                                                                <div class="field has-text-centered">
                                                                    <h2 class="title is-5 m-b-20 is-narrow m-b-5">{{ __('Ready to stay with us?') }}</h2>
                                                                    <div class="control">
                                                                        <x-buttons.form-submit
                                                                            title="{{ __('BOOK ROOM NOW') }}"></x-buttons.form-submit>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="room" value="{{ $room->id }}">

                                                            <!--Widget-->
                                                            <div class="widget text-widget">
                                                                <div class="field">
                                                                    <h2 class="title is-5 is-narrow m-b-20 has-text-centered">{{ __('Checking in and out') }}</h2>
                                                                    <div class="control">
                                                                    <span>{{ __('You can check in anytime after ') }}<b>{{ __('2 pm') }}</b>
                                                                        {{ __(' on a day of your arrival.') }}
                                                                    </span>
                                                                        <span>{{ __('After your stay, we would like you to check out until ') }}<b>{{ __('12 pm') }}</b>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="column is-3">
                                                    <!--Widget-->
                                                    <div class="list-widget list-widget-v1 p-t-20 p-l-20 p-r-20 p-b-20">
                                                        <div class="widget-head">
                                                            <h3 class="dark-inverted">{{ __('Room amenities') }}</h3>
                                                        </div>
                                                        <div class="inner-list">
                                                            @foreach($room->property->amenities as $amenity)
                                                                <div class="inner-list-item media-flex-center">
                                                                    <div class="h-icon is-info">
                                                                        <i class="{{ $amenity->font_awesome }}"></i>
                                                                    </div>
                                                                    <div class="flex-meta is-light">
                                                                        <span>{{ $amenity->name }}</span>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <!--Widget-->
                                                    <div class="list-widget list-widget-v1 p-t-20 p-l-20 p-r-20 p-b-20">
                                                        <div class="widget-head">
                                                            <h3 class="dark-inverted">{{ __('Location') }}</h3>
                                                        </div>
                                                        <div class="inner-list">
                                                            <p><i class="fas fa-map-marker-alt"></i> {{ $room->property->address }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
    <script>
        mobiscroll.setOptions({
            theme: 'ios',
            themeVariant: 'light'
        });

        $(function () {
            $('#calendar').mobiscroll().datepicker({
                controls: ['calendar'],
                select: 'range',
                touchUi: true,
                display: 'inline',
                onChange: function (event, inst) {
                    $('#check-in').val(inst.value[0]);
                    $('#check-out').val(inst.value[1]);
                },
                invalid: [
                    @foreach($bookedDates as $date)
                    {
                        start: "{{ $date['booked_from'] }}",
                        end: "{{ $date['booked_to'] }}",
                    },
                    @endforeach
                ]
            });
        });
    </script>
@endpush
