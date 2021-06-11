@extends('layouts.app')

@section('content')
    <div class="app-wrapper">
        <div class="app-overlay"></div>
        <div id="edit-profile" class="view-wrapper is-webapp">
            <div class="page-content-wrapper m-t-20">
                <div class="page-content is-relative">


                    <div class="title is-12 m-t-50 text-primary" style="text-align: center">
                        <h3>{{ __('Select one of our properties to find the most suitable place for your stay!') }}</h3>
                    </div>


                    <div class="card-grid-toolbar">
                        <div class="control has-icon">
                            <input class="input custom-text-filter" placeholder="Search..."
                                   data-filter-target=".column">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="page-content-inner">

                        <div class="card-grid card-grid-v2">

                            <!--List Empty Search Placeholder -->
                            <div class="page-placeholder custom-text-filter-placeholder is-hidden">
                                <div class="placeholder-content">
                                    <img class="light-image"
                                         src="{{ asset('assets/img/illustrations/placeholders/search-3.svg') }}"
                                         alt=""/>
                                    <img class="dark-image"
                                         src="{{ asset('assets/img/illustrations/placeholders/search-3-dark.svg') }}"
                                         alt=""/>
                                    <h3>{{ __("We couldn't find any matching results.") }}</h3>
                                    <p class="is-larger">{{ __("Too bad. Looks like we couldn't find any matching results for the
                        search terms you've entered. Please try different search terms or criteria.") }}</p>
                                </div>
                            </div>

                            <!--Card Grid v2-->
                            <div class="columns is-multiline">
                                @forelse($properties as $property)
                                    <div class="column is-4" id="property-{{ $property->id }}">
                                        <div class="card-grid-item">
                                            <div class="card">
                                                <header class="card-header">
                                                    <div class="card-header-title">
                                                        <div class="meta">
                                                            <h3 class="dark-inverted"
                                                                data-filter-match>{{ $property->name }}</h3>
                                                            <x-assets.stars-rating
                                                                rating="{{ $property->rating }}"></x-assets.stars-rating>
                                                        </div>
                                                    </div>
                                                </header>

                                                <div class="card-image">
                                                    <figure class="image is-16by9">
                                                        <img
                                                            src="{{ $property->getMedia()->first() ? $property->getFirstMediaUrl() : asset('assets/img/placeholders/placeholder.png') }}"
                                                            alt="{{ $property->name }}">
                                                    </figure>
                                                </div>
                                                <div class="card-content h-40">
                                                    <div class="card-content-flex">
                                                        <div class="card-info">
                                                            <b data-filter-match><i
                                                                    class="fas fa-map-marker-alt p-r-5"></i>{{ $property->address }}
                                                            </b>
                                                            <p data-filter-match
                                                               class="dark-inverted m-t-10 has-text-justified @if(strlen($property->short_description) > 200) hint--primary hint--bottom @endif"
                                                               @if(strlen($property->short_description) > 200) data-hint="{{ $property->short_description }} @endif">
                                                                {!! mb_strimwidth($property->short_description, 0, 200, "...<span class='p-l-10 text-primary'>hover to read more</span>")  !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <footer class="card-footer">
                                                    <a href="{{ route('properties.show', $property) }}"
                                                       class="card-footer-item">{{ __('Rooms') }}</a>
                                                    <a href="#" id="shareProp-{{ $property->id }}"
                                                       class="card-footer-item">{{ __('Share') }}</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                <!--No results returned -->
                                    <div class="page-placeholder custom-text-filter-placeholder">
                                        <div class="placeholder-content">
                                            <img class="light-image"
                                                 src="{{ asset('assets/img/illustrations/placeholders/search-3.svg') }}"
                                                 alt=""/>
                                            <img class="dark-image"
                                                 src="{{ asset('assets/img/illustrations/placeholders/search-3-dark.svg') }}"
                                                 alt=""/>
                                            <h3>{{ __("No properties found") }}</h3>
                                            <p class="is-larger">{{ __("We were not able to find any properties. You can always add them by clicking '+add'
                                in the top right corner.") }}</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>

                            {{ $properties->onEachSide(1)->links('vendor.pagination.default') }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        @foreach($properties as $property)
            document.querySelector('#shareProp-{{ $property->id }}').addEventListener('click', () => {
                navigator.share({
                    title: 'Share this property with you friends!',
                    text: 'Share this property with you friends!',
                    url: '{{ env('FRONT_OFFICE_URL') . "properties/" . $property->id }}',
                });
            });
        @endforeach
    </script>
@endpush
