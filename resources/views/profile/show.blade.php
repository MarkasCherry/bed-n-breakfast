@extends('layouts.app')

@section('content')
    <div class="app-wrapper">
        <div class="app-overlay"></div>
        @include('layouts.header.navigation')
        <div id="edit-profile" class="view-wrapper is-webapp">
            <div class="page-content-wrapper">
                <div class="page-content is-relative m-t-50">

                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Edit Profile</h1>
                        </div>
                    </div>

                    <livewire:profile />

                </div>
            </div>
        </div>
    </div>
@endsection
