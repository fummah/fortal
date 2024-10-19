<x-app-layout>
 
<div class="main-tab-holder main-tab-holder-with-spaces">
        <ul class="flex border-b">
            <li class="-mb-px mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 font-semibold border-b-2 border-blue-500 tab-button" onclick="showContent('profile', this)"><i class="bi bi-person-badge"></i>
                Profile Settings
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('services', this)"><i class="bi bi-gear"></i>
                    Services
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('business-info', this)"><i class="bi bi-building"></i>
                    Business Information
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('buy-credits', this)"><i class="bi bi-credit-card"></i>
                    Buy More Credits
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('password', this)"><i class="bi bi-arrow-down-up"></i>
                    Update Password
                </button>
            </li>
            
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('notifications', this)"><i class="bi bi-bell"></i>
                    Notifications
                </button>
            </li>
            
        </ul>
    </div>

    <div class="flex justify-center">
        <!-- Main Content -->
        <div class="w-full h-screen p-6 flex justify-center items-center">
            <div id="profile" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div id="services" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-services')
                    </div>
                </div>
            </div>

            <div id="password" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div id="buy-credits" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.buy-credits-form')
                    </div>
                </div>
            </div>

            <div id="notifications" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.notifications-form')
                    </div>
                </div>
            </div>

            <div id="business-info" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.business-info-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</x-app-layout>
