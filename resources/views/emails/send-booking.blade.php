@component('mail::message')
    <p>Thank you for choosing to stay with us!</p>
    <br>
    <br>
    <p>Your booking number is <b>#{{ $booking->id }}</b></p>
    <hr>
    <h3>You booking order:</h3>
    <p>{{ __('To stay with us from ') }}<strong>{{ Carbon\Carbon::parse($booking->booked_from)->format('Y-m-d') }}</strong>
        {{ __('to') }} <strong>{{ Carbon\Carbon::parse($booking->booked_to)->format('Y-m-d') }}</strong>.</p>
    <p>{{ __('In') }}
        <strong>{{ $booking->room->property->name }}</strong> {{ __('apartment') }}
        .</p>
    <p>{{ __('Room') }}: <strong>{{ $booking->room->name }}
            ({{ $booking->room->room_number }}).</strong>
    </p>
    <p>{{ __('For') }} <strong>{{ $booking->guest_no }} {{ __('pers') }}
            .</strong></p>
    @if($booking->breakfast_needed)
        <p>
            <strong>{{ __('You have also selected breakfast in the morning') }}
                .</strong></p>
    @endif
    <br>
    <br>
    <b>Waiting to see you soon!</b>
@endcomponent
