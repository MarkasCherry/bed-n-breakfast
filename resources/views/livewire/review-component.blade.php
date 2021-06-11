<div>
    @auth
        @if($reviewing)
            <form method="POST" wire:submit.prevent="submit">
                <x-inputs.textarea for="message" name="message" rows="4">
                    <x-slot name="title">{{ __('Leave your review') }}</x-slot>
                </x-inputs.textarea>

                <x-inputs.star-rating name="rating">
                    <x-slot name="title">{{ __('Select your rating') }}</x-slot>
                </x-inputs.star-rating>

                <x-buttons.form-submit
                    title="{{ __('SEND US REVIEW') }}">
                </x-buttons.form-submit>
            </form>
        @endif

        <p class="text-primary">
            <a wire:click="$toggle('reviewing')">{{ $reviewing ? 'Hide' : 'I want to leave a review!' }}</a>
        </p>
    @else
        <p class="text-primary">{{ __('If you would like to leave a review, please ') }}
            <a href="{{ route('login') }}">{{ __('login') }}</a>.
        </p>
    @endauth
</div>
