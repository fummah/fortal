<style>
    @media (min-width: 300px) {
        .uk-child-width-1-2@m > * {
            width: 15% !important;
        }
        img, video {
            max-width: fit-content;
        }
    }
</style>

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                <b>{{ __("Update your account's profile information") }}</b>
            </h2>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="uk-grid-match uk-child-width-1-2@m uk-margin" uk-grid>
                <div>
                    <img src="{{ $user->profile_picture_url ?? asset('build/assets/img/profile_avatar.png') }}" 
                         alt="Profile Picture" class="rounded-full w-20 h-32 object-cover">
                </div>
                <div>
                    <label for="profile_picture" class="block text-sm font-medium text-gray-700">
                        <h2><b>{{ __('Upload Profile Picture') }}</b></h2>
                    </label>
                    <input type="file" id="profile_picture" name="profile_picture" 
                           class="block w-full focus:ring focus:ring-indigo-200" accept="image/*" />
                </div>
            </div>

            <div>
                <div class="uk-margin">
                    <x-input-label for="first_name" :value="__('First Name*')" />
                    <x-text-input id="first_name" name="first_name" type="text" 
                                   class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                                   :value="old('first_name', $user->first_name)" required autofocus autocomplete="first_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                </div>

                <div class="uk-margin">
                    <x-input-label for="last_name" :value="__('Last Name*')" />
                    <x-text-input id="last_name" name="last_name" type="text" 
                                   class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                                   :value="old('last_name', $user->last_name)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_name">{{ __('Company Name (optional)') }}</label>
                <input type="text" id="company_name" name="company_name" 
                       class="mt-1 block w-full p-2 border border-gray-300 rounded" 
                       value="{{ old('company_name', $user->company_name) }}">
                <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_registration_number">{{ __('Company Registration Number (optional)') }}</label>
                <input type="text" id="company_registration_number" name="company_registration_number" 
                       class="mt-1 block w-full p-2 border border-gray-300 rounded" 
                       value="{{ old('company_registration_number', $user->company_registration_number) }}">
                <x-input-error class="mt-2" :messages="$errors->get('company_registration_number')" />
            </div>

            <h2><b>{{ __('Contact Information*') }}</b></h2>
            <div class="mb-4">
                <label class="block text-gray-700" for="contact_number">{{ __('Contact Number (optional)') }}</label>
                <input type="text" id="contact_number" name="contact_number" 
                       class="mt-1 block w-full p-2 border border-gray-300 rounded" 
                       value="{{ old('contact_number', $user->contact_number) }}">
                <x-input-error class="mt-2" :messages="$errors->get('contact_number')" />
            </div>

            <div class="uk-margin">
                <x-input-label for="email" :value="__('Email*')" />
                <x-text-input id="email" name="email" type="email" 
                               class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                               :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2 p-2 border border-yellow-200 bg-yellow-50 rounded-md">
                    <p class="text-sm text-gray-800">
                        {{ __('Your email address is unverified.*') }}
                        <button form="send-verification" class="underline text-sm text-yellow-600 hover:text-yellow-900">{{ __('Click here to re-send the verification email.') }}</button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">{{ __('A new verification link has been sent to your email address.') }}</p>
                    @endif
                </div>
            @endif

            <h3><b>{{ __('Location Information') }}</b></h3>
            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                <div class="uk-margin">
                    <x-input-label for="location" :value="__('Address')" />
                    <x-text-input id="location" name="location" type="text" 
                                   class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                                   :value="old('location', $user->location)" />
                </div>
                <div class="uk-margin">
                    <x-input-label for="inputState" :value="__('State')" />
                    <select id="inputState" name="state" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200">
                        <option selected>{{ old('state', $user->state) ?: 'Choose...' }}</option>
                        <option>Western Cape</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <x-input-label for="inputZip" :value="__('Zip')" />
                    <x-text-input id="inputZip" name="zip" type="text" 
                                   class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                                   :value="old('zip', $user->zip)" />
                </div>
            </div>

                <div class="mb-4">
                <label class="block text-gray-700" for="is_company_website">{{ __('Company Website (optional') }}</label>
                <select id="is_company_website" name="is_company_website" 
                        class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200">
                    <option value="1" {{ old('is_company_website', $user->is_company_website) ? 'selected' : '' }}>{{ __('Yes') }}</option>
                    <option value="0" {{ !old('is_company_website', $user->is_company_website) ? 'selected' : '' }}>{{ __('No') }}</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('is_company_website')" />
                </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="is_company_sales_team">{{ __('Is Company Sales Team? (optional)') }}</label>
                <select id="is_company_sales_team" name="is_company_sales_team" 
                        class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200">
                    <option value="1" {{ old('is_company_sales_team', $user->is_company_sales_team) ? 'selected' : '' }}>{{ __('Yes') }}</option>
                    <option value="0" {{ !old('is_company_sales_team', $user->is_company_sales_team) ? 'selected' : '' }}>{{ __('No') }}</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('is_company_sales_team')" />
            </div>

            <div class="mb-4">
    <label class="block text-gray-700" for="company_size">{{ __('Company Size (optional)') }}</label>
    <select id="company_size" name="company_size" 
            class="mt-1 block w-full p-2 border border-gray-300 rounded">
        <option value="">Select Company Size</option>
        <option value="Self-employed, Sole Trader" {{ old('company_size', $user->company_size) == 'Self-employed, Sole Trader' ? 'selected' : '' }}>Self-employed, Sole Trader</option>
        <option value="2-10" {{ old('company_size', $user->company_size) == '2-10' ? 'selected' : '' }}>2-10</option>
        <option value="11-50" {{ old('company_size', $user->company_size) == '11-50' ? 'selected' : '' }}>11-50</option>
        <option value="51-200" {{ old('company_size', $user->company_size) == '51-200' ? 'selected' : '' }}>51-200</option>
        <option value="200+" {{ old('company_size', $user->company_size) == '200+' ? 'selected' : '' }}>200+</option>
    </select>
    <x-input-error class="mt-2" :messages="$errors->get('company_size')" />
</div>


            <footer class="flex justify-between mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </footer>
        </form>
    </div>
</div>
