<div class="field">
    <div class="switch-block">
        <label class="form-switch is-primary">
            @if(!$attributes->get('model'))
                <input type="hidden"
                       name="{{ $attributes->get('name') ?? '' }}"
                       value="0"
                >
            @endif
            <input type="checkbox"
                   class="is-switch"
                   id="{{ $attributes->get('for') }}"
                   name="{{ $attributes->get('name') ?? '' }}"
                   @if($attributes->get('model', false)) wire:model.{{ $attributes->get('update', 'defer') }}="{{ $attributes->get('model') ?? $attributes->get('name', '') }}" @endif
                   @if($attributes->get('trigger')) wire:click="{{ $attributes->get('trigger') }}" @endif
                   value="1"
                   @if($attributes->get('checked') || old($attributes->get('name'), false)) checked @endif
            >
            <i></i>
        </label>
        <div class="text">
            <p>{{ $title }}</p>
        </div>
    </div>
    <x-jet-input-error for="{{ $attributes->get('for') }}" class="mt-2"/>
</div>
