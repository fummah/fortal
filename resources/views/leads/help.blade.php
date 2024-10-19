<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Help') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="">
            <div class="p-p sm:p-12 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <x-text-input id="msg" name="msg" type="text" class="mt-1 block w-full"  required autofocus autocomplete="msg" />
                <br>
                <x-primary-button>{{ __('Submit') }}</x-primary-button>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
