<div class="container">
    <div class="row header">
        <h1>CONTACT US &nbsp;</h1>
        <h3>Our contact details:</h3>
        <p style="color: white !important;">Phone: {{ $contactPhone }}</p>
        <p style="color: white !important;">Email: {{ $contactEmail }}</p>
        <p style="color: white !important;">Address: {{ $contactAddress }}</p>
    </div>
    <div class="row body">
        <form method="POST" wire:submit.prevent="submit">
            <label for="name">{{ __('Your name:') }}<span style="color: red">*</span></label>
            <input type="text" wire:model.defer="name"/>
            <x-jet-input-error for="name" class="mt-2 m-b-20"/>

            <label for="email">{{ __('Your email:') }}<span style="color: red">*</span></label>
            <input type="email" wire:model.defer="email"/>
            <x-jet-input-error for="email" class="mt-2 m-b-20"/>

            <label for="phone_number">{{ __('Your phone number:') }}</label>
            <input type="text" wire:model.defer="phone_number"/>

            <div class="divider"></div>

            <label for="question">{{ __('Your message:') }}<span style="color: red">*</span></label>
            <textarea cols="46" rows="3" wire:model.defer="question"></textarea>
            <x-jet-input-error for="question" class="mt-2 m-b-20"/>

            <input class="btn btn-submit" type="submit" value="Submit"/>
        </form>
    </div>
</div>
