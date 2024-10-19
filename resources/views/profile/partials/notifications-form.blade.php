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

            <button type="submit" class="mt-4 w-full p-2 bg-green-600 text-black rounded hover:bg-blue-700 btn btn-info">
                {{ __('Save Notification Settings') }}
            </button>
        </div>
    </div>
</section>
