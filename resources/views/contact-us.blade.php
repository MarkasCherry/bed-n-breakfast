@extends('layouts.app')

@section('title') Privacy Policy @endsection

@push('styles_after')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

        div, textarea, input {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .container {
            margin: 0 30% 0 30%;
        }

        .row {
            width: 100%;
            margin: 0 0 1em 0;
            padding: 0 2.5em;
        }

        .row.header {
            padding: 1.5em 2.5em;
            border-bottom: 1px solid #ccc;
            background: url(https://images2.imgbox.com/a5/2e/m3lRbCCA_o.jpg) left -80px;
            color: #fff;
        }

        .row.body {
            padding: .5em 2.5em 1em;
        }

        .pull-right {
            float: right;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            display: inline-block;
            font-weight: 100;
            font-size: 2.8125em;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            margin: 0 0 0.1em 0;
            padding: 0 0 0.4em 0;
        }

        h3 {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 1.25em;
            margin: 1em 0 0.4em 0;
        }

        .btn {
            font-size: 1.0625em;
            display: inline-block;
            padding: 0.74em 1.5em;
            margin: 1.5em 0 0;
            color: #fff;
            border-width: 0 0 0 0;
            border-bottom: 5px solid;
            text-transform: uppercase;
            background-color: #b3b3b3;
            border-bottom-color: #8c8c8c;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
        }

        .btn:hover {
            background-color: #bfbfbf;
        }

        .btn.btn-submit {
            background-color: #4f6fad;
            border-bottom-color: #374d78;
        }

        .btn.btn-submit:hover {
            background-color: #5f7db6;
        }

        form {
            max-width: 100%;
            display: block;
        }

        form ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        form ul li {
            margin: 0 0 0.25em 0;
            clear: both;
            display: inline-block;
            width: 100%;
        }

        form ul li:last-child {
            margin: 0;
        }

        form ul li p {
            margin: 0;
            padding: 0;
            float: left;
        }

        form ul li p.right {
            float: right;
        }

        form ul li .divider {
            margin: 0.5em 0 0.5em 0;
            border: 0;
            height: 1px;
            width: 100%;
            display: block;
            background-color: #4f6fad;
            background-image: linear-gradient(to right, #ee9cb4, #4f6fad);
        }

        form ul li .req {
            color: #ee9cb4;
        }

        form label {
            display: block;
            margin: 0 0 0.5em 0;
            color: #4f6fad;
            font-size: 1em;
        }

        form input {
            width: 100%;
            margin: 0 0 0.5em 0;
            border: 1px solid #ccc;
            padding: 6px 10px;
            color: #555;
            font-size: 1em;
        }

        form textarea {
            border: 1px solid #ccc;
            padding: 6px 10px;
            width: 100%;
            color: #555;
        }

        form small {
            color: #4f6fad;
            margin: 0 0 0 0.5em;
        }

        @media only screen and (max-width: 480px) {
            .container {
                margin: 100px 0 0 0;
            }

            .pull-right {
                float: none;
            }

            input {
                width: 100%;
            }

            label {
                width: 100%;
                display: inline-block;
                float: left;
                clear: both;
            }

            li, p {
                width: 100%;
            }

            input.btn {
                margin: 1.5em 0 0.5em;
            }

            h1 {
                font-size: 2.25em;
            }

            h3 {
                font-size: 1.125em;
            }

            li small {
                display: none;
            }
        }

    </style>
@endpush

@section('content')
    <div class="app-wrapper">
        <div class="app-overlay"></div>
        @include('layouts.header.navigation')
        <div id="edit-profile" class="view-wrapper is-webapp">
            <div class="page-content-wrapper">
                <div class="page-content is-relative tabs-wrapper is-slider is-squared is-inverted">
                    <div class="list-view-toolbar is-webapp">
                        <div class="page-content-wrapper">
                            <livewire:contact-us />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
