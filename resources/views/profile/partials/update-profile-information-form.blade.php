<section class="p-4 bg-white rounded-lg">

    <header>
        <h2 class="text-2xl font-semibold text-gray-900">{{ __('Profile Information') }}</h2>
        <p class="mt-2 text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="flex items-center mb-4">
            <div class="mr-4">
                <img 
                    alt="Profile Picture" 
                    <img src="{{ $user->profile_picture_url ?? asset('build/assets/img/profile_avatar.png') }}" alt="Profile Picture" class="rounded-full w-32 h-32 object-cover" >

            </div>
            <div>
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">{{ __('Upload Profile Picture') }}</label>
                <input 
                    type="file" 
                    id="profile_picture" 
                    name="profile_picture" 
                    class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                    accept="image/*" 
                />
            </div>
        </div>

        <div class="flex space-x-4">
            <div class="flex-1"  style="margin:20px">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input 
                    id="first_name" 
                    name="first_name" 
                    type="text" 
                    class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                    :value="old('first_name', $user->first_name)" 
                    required 
                    autofocus 
                    autocomplete="first_name" 
                />
                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
            </div>

            <div class="flex-1" style="margin:20px">
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input 
                    id="last_name" 
                    name="last_name" 
                    type="text" 
                    class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                    :value="old('last_name', $user->last_name)" 
                />
                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                name="email" 
                type="email" 
                class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                :value="old('email', $user->email)" 
                required 
                autocomplete="username" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2 p-2 border border-yellow-200 bg-yellow-50 rounded-md">
                    <p class="text-sm text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-yellow-600 hover:text-yellow-900">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <div class="form-group">
                <x-input-label for="inputAddress" :value="__('Address')" />
                <x-text-input 
                    id="inputAddress" 
                    name="address" 
                    type="text" 
                    class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                    :value="old('address', $user->address)" 
                />
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <x-input-label for="inputCity" :value="__('City')" />
                    <x-text-input 
                        id="inputCity" 
                        name="city" 
                        type="text" 
                        class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                        :value="old('city', $user->city)" 
                    />
                </div>

                <div class="form-group col-md-4">
                    <x-input-label for="inputState" :value="__('State')" />
                    <select id="inputState" name="state" class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200">
                        <option selected>{{ old('state', $user->state) ?: 'Choose...' }}</option>
                        <option>Western Cape</option>
                        <!-- Add more states as necessary -->
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <x-input-label for="inputZip" :value="__('Zip')" />
                    <x-text-input 
                        id="inputZip" 
                        name="zip" 
                        type="text" 
                        class="mt-1 block w-full border rounded-md focus:ring focus:ring-indigo-200" 
                        :value="old('zip', $user->zip)" 
                    />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
