<section class="p-4 bg-white rounded-lg">

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Notification Settings') }}
        </h2>
    </header>

    <div class="p-4 sm:p-8  sm:rounded-lg">
        <div class="max-w-xl">

            <h4 class="text-md font-semibold mt-4">Services Alerts</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Real-Time Alerts for Subscribed Services') }}
            </label>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Email Notifications for New Leads') }}
            </label>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Weekly Newsletter') }}
            </label>

            <h4 class="text-md font-semibold mt-4">SMS Notifications</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Enable SMS Notifications') }}
            </label>
            <textarea class="mt-1 block w-full p-2 border border-gray-300 rounded" placeholder="{{ __('Comments') }}" rows="3"></textarea>

           <!-- <h4 class="text-md font-semibold mt-4">Updates From People</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Receive updates from people you follow') }}
            </label>

            <h4 class="text-md font-semibold mt-4">Reminders</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Enable reminders') }}
            </label>

            <h4 class="text-md font-semibold mt-4">Events</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Notify me about upcoming events') }}
            </label>

            <h4 class="text-md font-semibold mt-4">Services You Follow</h4>
            <label class="flex items-center mb-2">
                <input type="checkbox" class="mr-2">
                {{ __('Receive notifications from services you follow') }}
            </label>-->

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</section>
