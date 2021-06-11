<div class="field">
    <x-jet-label for="{{ $attributes->get('for') }}" value="{{ $title }}"/>
    <div class="control">
        <textarea class="textarea"
                  id="{{ $attributes->get('for') }}"
                  rows="{{ $attributes->get('rows') }}"
                  wire:model.defer="{{ $attributes->get('name') ?? '' }}"
                  value="{{ old($attributes->get('name') ?? '', $attributes->get('value') ?? '') }}"
                  placeholder="{{ $attributes->get('placeholder') }}"></textarea>
    </div>
    <x-jet-input-error for="{{ $attributes->get('for') }}" class="mt-2"/>
</div>
