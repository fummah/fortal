
    <style>@media (min-width: 960px) {
    .uk-child-width-1-2\@m>* {
        width: 13% !important;
    }
}</style>
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
                    <label for="profile_picture" class="block text-sm font-medium text-gray-700"><h2><b>{{ __('Upload Profile Picture') }}</b></h2></label>
                    <input type="file" id="profile_picture" name="profile_picture" class="block w-full  focus:ring focus:ring-indigo-200" accept="image/*" />
                </div>
            </div>

            
            <div>
                <div class="uk-margin">
                    <x-input-label for="first_name" :value="__('First Name*')" />
                    <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('first_name', $user->first_name)" required autofocus autocomplete="first_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                </div>

                <div class="uk-margin">
                    <x-input-label for="last_name" :value="__('Last Name*')" />
                    <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('last_name', $user->last_name)" />
                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                </div>
            </div>
            <div class="mb-4">
                    <label class="block text-gray-700" for="business-name">{{ __('Business Name (optional)') }}</label>
                    <input type="text" id="business-name" name="business-name" class="mt-1 block w-full p-2 border border-gray-300 rounded" >
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700" for="business-registration-number">{{ __('Business Registration Number (optional)') }}</label>
                    <input type="text" id="business-registration-number" name="business-registration-number" class="mt-1 block w-full p-2 border border-gray-300 rounded" >
                </div>

            <h2><b>{{ __('Contact Information*') }}</b></h2>
            <div class="uk-margin">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('email', $user->email)" required autocomplete="username" />
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

            <h3><b>{{ __('Address Information') }}</b></h3>
            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                <div class="uk-margin">
                    <x-input-label for="inputAddress" :value="__('Address')" />
                    <x-text-input id="inputAddress" name="address" type="text" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('address', $user->address)" />
                </div>
                <div class="uk-margin">
                    <x-input-label for="inputCity" :value="__('City')" />
                    <x-text-input id="inputCity" name="city" type="text" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('city', $user->city)" />
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
                    <x-text-input id="inputZip" name="zip" type="text" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" :value="old('zip', $user->zip)" />
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</div>
