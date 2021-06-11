<div class="field s-card">
    <div class="column text-center">
        <h2 class="title is-6 text-center is-narrow is-bold">{{ $title }}</h2>
    </div>

    <x-jet-label for="{{ $attributes->get('for') }}_from" value="From"/>
    <x-jet-input class="m-b-10" id="{{ $attributes->get('for') }}_from" type="{{ $attributes->get('type', 'text') }}"
                 wire:model.defer="{{ $attributes->get('name') ?? '' }}_from"
                 name="{{ $attributes->get('name') ?? '' }}_from"
                 value="{{ old($attributes->get('name') ?? '', $attributes->get('value') ?? '') }}_from"/>
    <x-jet-input-error for="{{ $attributes->get('for') }}_from" class="mt-2"/>

    <x-jet-label for="{{ $attributes->get('for') }}_from" value="To"/>
    <x-jet-input class="m-b-10" id="{{ $attributes->get('for') }}_to" type="{{ $attributes->get('type', 'text') }}"
                 wire:model.defer="{{ $attributes->get('name') ?? '' }}_to"
                 name="{{ $attributes->get('name') ?? '' }}_to"
                 value="{{ old($attributes->get('name') ?? '', $attributes->get('value') ?? '') }}_to"/>
    <x-jet-input-error for="{{ $attributes->get('for') }}_to" class="mt-2"/>

    <x-jet-label class="m-t-10" for="{{ $attributes->get('for') }}_not_active" value="Not working?"/>
    <div class="control">
        <label class="form-switch is-primary">
            <input id="{{ $attributes->get('for') }}_not_active"
                   type="{{ $attributes->get('type', 'checkbox') }}"
                   class="is-switch"
                   wire:model="{{ $attributes->get('not_active') ?? '' }}"
                   value="{{ old($attributes->get('not_active') ?? '', $attributes->get('value') ?? '') }}">
            <i></i>
        </label>
    </div>
    <x-jet-input-error for="{{ $attributes->get('not_active') }}" class="mt-2"/>
</div>
