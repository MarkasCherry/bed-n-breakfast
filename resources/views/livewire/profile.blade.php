<div class="page-content-inner">

    <!--Edit Profile-->
    <div class="account-wrapper">
        <div class="columns">

            <!--Navigation-->
            <div class="column is-4">
                <div class="account-box is-navigation">
                    <div class="media-flex-center">
                        <div class="h-avatar is-large">
                            <img class="avatar"
                                 @if($client->profile_photo_path) src="{{ asset('storage/' . $client->profile_photo_path) }}"
                                 @else src="https://via.placeholder.com/150x150" @endif alt="">
                        </div>
                        <div class="flex-meta">
                            <span>{{ $client->fullName }}</span>
                        </div>
                    </div>

                    <div class="account-menu">
                        <a wire:click="$set('display', {{ \App\Http\Livewire\Profile::BOOKINGS }})"
                           class="account-menu-item @if($display == \App\Http\Livewire\Profile::BOOKINGS) is-active @endif">
                            <i class="fas fa-suitcase-rolling"></i>
                            <span>{{ __('Bookings') }}</span>
                            <span class="end">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>

                        <a wire:click="$set('display', {{ \App\Http\Livewire\Profile::MAIN_SETTINGS }})"
                           class="account-menu-item @if($display == \App\Http\Livewire\Profile::MAIN_SETTINGS) is-active @endif">
                            <i class="fas fa-user-cog"></i>
                            <span>{{ __('Settings') }}</span>
                            <span class="end">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>

                        <a class="account-menu-item @if($display == \App\Http\Livewire\Profile::CHANGE_PASSWORD) is-active @endif"
                           wire:click="$set('display', {{ \App\Http\Livewire\Profile::CHANGE_PASSWORD }})">
                            <i class="fas fa-unlock-alt"></i>
                            <span>{{ __('Change password') }}</span>
                            <span class="end">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>

                        <a wire:click="$set('display', {{ \App\Http\Livewire\Profile::CONTACT_ADMIN }})"
                           class="account-menu-item @if($display == \App\Http\Livewire\Profile::CONTACT_ADMIN) is-active @endif">
                            <i class="far fa-envelope"></i>
                            <span>{{ __('Contact administration') }}</span>
                            <span class="end">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!--Form-->
            <div class="column is-8">
                <div
                    class="account-box is-form is-footerless @if($display != \App\Http\Livewire\Profile::BOOKINGS) is-hidden @endif">
                    <div class="form-head stuck-header">
                        <div class="form-head-inner">
                            <div class="left">
                                <h3>{{ __('Bookings') }}</h3>
                                <p>{{ __('List of your bookings in our hotel') }}</p>
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="message is-success m-l-40 m-r-40">
                            <a onclick="$('div.message').hide()" class="delete"></a>
                            <div class="message-body">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    <div class="page-content-inner">
                        <div class="list-view list-view-v1">
                            <div class="list-view-inner">
                            @forelse($bookings as $booking)
                                <!--Item-->
                                    <div class="list-view-item"
                                         style="border-radius: unset; border:unset; border-bottom: 1px solid #e5e5e5;">
                                        <div class="list-view-item-inner">
                                            <div class="meta-right">
                                                <div class="stats">
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">#{{ $booking->id }}</span>
                                                        <span>{{ __('Booking ID') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">{{ Carbon\Carbon::parse($booking->booked_from)->format('Y-m-d') }}</span>
                                                        <span>{{ __('Booked from') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">{{ Carbon\Carbon::parse($booking->booked_to)->format('Y-m-d') }}</span>
                                                        <span>{{ __('Booked to') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">{{ $booking->room->room_number }}</span>
                                                        <span>{{ __('Room number') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">{{ \App\Tools::displayPrice($booking->price) }}</span>
                                                        <span>{{ __('Price') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                    <span
                                                        style="font-size: 14px">{{ $booking->breakfast_needed ? 'Yes' : 'No' }}</span>
                                                        <span>{{ __('Breakfast needed?') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                        <span style="font-size: 14px">{{ $booking->guest_no }}</span>
                                                        <span>{{ __('Number of Guests') }}</span>
                                                    </div>
                                                    <div class="separator"></div>
                                                    <div class="stat m-l-10 m-r-10">
                                                        <a href="{{ route('profile.generatePdf', $booking) }}">
                                                            <i class="far fa-file-pdf"></i>
                                                            <span>{{ __('PDF') }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="page-placeholder custom-text-filter-placeholder">
                                        <div class="placeholder-content">
                                            <img class="light-image"
                                                 src="{{ asset('assets/img/illustrations/placeholders/search-3.svg') }}"
                                                 alt=""/>
                                            <img class="dark-image"
                                                 src="{{ asset('assets/img/illustrations/placeholders/search-3-dark.svg') }}"
                                                 alt=""/>
                                            <h3>{{ __("You do not have any reservations at this moment.") }}</h3>
                                        </div>
                                    </div>
                                @endforelse
                            </div>

                            {{ $bookings->onEachSide(1)->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div
                    class="account-box is-form is-footerless @if($display != \App\Http\Livewire\Profile::MAIN_SETTINGS) is-hidden @endif">
                    <form method="POST" wire:submit.prevent="submit">
                        <div class="form-head stuck-header">
                            <div class="form-head-inner">
                                <div class="left">
                                    <h3>{{ __('Settings') }}</h3>
                                    <p>{{ __('Edit your main information') }}</p>
                                </div>
                                <div class="right">
                                    <div class="buttons">
                                        <button id="save-button"
                                                class="button h-button is-primary is-raised">Save
                                            Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-body">
                            <div class="columns is-multiline">
                                <div class="column is-6">
                                    <x-inputs.group for="name" name="name">
                                        <x-slot name="title">{{ __('First name') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                                <div class="column is-6">
                                    <x-inputs.group for="lastname" name="lastname" value="">
                                        <x-slot name="title">{{ __('Last name') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                            </div>
                            <div class="columns is-multiline">
                                <div class="column is-6">
                                    <x-inputs.group for="email" name="email" value="">
                                        <x-slot name="title">{{ __('Email') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                                <div class="column is-6">
                                    <x-inputs.group for="phone" name="phone" value="">
                                        <x-slot name="title">{{ __('Phone number') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                            </div>
                            <!--Fieldset-->
                            <div class="column is-12 has-text-centered">
                                <x-jet-label for="profile_photo_path" value="{{ ('Update your profile photo') }}"/>
                                <div class="columns is-centered m-t-5">
                                    <x-inputs.file name="profile_photo_path" for="profile_photo_path"
                                                   file="{{ $profile_photo_path }}"></x-inputs.file>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="@if($display != \App\Http\Livewire\Profile::CHANGE_PASSWORD) is-hidden @endif">
                    <livewire:profile.update-password-form/>
                </div>

                <div
                    class="account-box is-form is-footerless @if($display != \App\Http\Livewire\Profile::CONTACT_ADMIN) is-hidden @endif">
                    <form method="POST" wire:submit.prevent="sendMessage">
                        <div class="form-head stuck-header">
                            <div class="form-head-inner">
                                <div class="left">
                                    <h3>{{ __('Have a question?') }}</h3>
                                    <p>{{ __('Send the message to the administration and we will get in touch with you very soon') }}</p>
                                </div>
                                <div class="right">
                                    <div class="buttons">
                                        <button id="save-button"
                                                class="button h-button is-primary is-raised">Send message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-body">
                            <div class="columns is-multiline">
                                <div class="column is-6">
                                    <x-inputs.group for="email" name="email">
                                        <x-slot name="title">{{ __('Your email') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                                <div class="column is-6">
                                    <x-inputs.group for="phone" name="phone">
                                        <x-slot name="title">{{ __('Your phone number') }}</x-slot>
                                    </x-inputs.group>
                                </div>
                                <div class="column is-12">
                                    <x-inputs.textarea for="message" name="message" rows="10">
                                        <x-slot name="title">{{ __('Please leave your message below') }}</x-slot>
                                    </x-inputs.textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
