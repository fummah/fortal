<x-app-layout>
    <div class="main-tab-holder main-tab-holder-with-spaces pt-2 pb-3 px-2">
        <ul class="flex flex-wrap border-b flex items-center">
            <li class="-mb-px mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 font-semibold border-b-2 border-blue-500 tab-button" onclick="showContent('profile', this)">
                    <i class="bi bi-person-badge"></i> Profile Settings
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('services', this)">
                    <i class="bi bi-gear"></i> Services
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('buy-credits', this)">
                    <i class="bi bi-credit-card"></i> Buy More Credits
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('password', this)">
                    <i class="bi bi-arrow-down-up"></i> Update Password
                </button>
            </li>
            <li class="mr-1">
                <button class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-500 tab-button" onclick="showContent('notifications', this)">
                    <i class="bi bi-bell"></i> Notifications
                </button>
            </li>
        </ul>
    </div>

    <div class="flex justify-center">
        <!-- Main Content -->
        <div class="w-full min-h-screen p-4 sm:p-6 flex flex-col items-center space-y-6 md:flex-row md:justify-center md:space-y-0 md:space-x-6 uk-padding">
            <div id="profile" class="content hidden">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                        <!-- Add Save Button Here -->
                        <button id="saveButton" type="button" class="bg-blue-500 text-white px-4 py-2 rounded">
                            Save
                        </button>
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

<script>
    function showContent(contentId, tab) {
        // Hide all content divs
        const contents = document.querySelectorAll('.content');
        contents.forEach(content => {
            content.classList.add('hidden');
        });

        // Remove active styles from all tabs
        const allTabs = document.querySelectorAll('.tab-button');
        allTabs.forEach(function(t) {
            t.classList.remove('text-blue-500', 'border-b-2', 'border-blue-500');
            t.classList.add('text-gray-500');
        });

        // Show the selected content and style the active tab
        tab.classList.remove('text-gray-500');
        tab.classList.add('text-blue-500', 'border-b-2', 'border-blue-500');
        document.getElementById(contentId).classList.remove('hidden');
    }

   
    window.onload = function() {
        const profileTab = document.querySelector('.tab-button');
        showContent('profile', profileTab);
    };

    function toast(icon, txt, time) {
        yoyoToast.fire({
            type: icon,
            title: 'Status',
            message: txt,
            timeout: time,
            position: 'top-right',
            timeoutFunction: () => {},   
        });
    }

 
    document.getElementById('saveButton').addEventListener('click', function() {
        toast('success', 'Profile updated successfully!', 3000);
    });
</script>
