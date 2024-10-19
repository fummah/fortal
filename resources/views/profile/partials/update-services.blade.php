<section class="p-4 bg-white rounded-lg">

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add More Services') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your services.") }}
        </p>
    </header>


    <form method="post" action="{{ route('update_services') }}" class="mt-6 space-y-6">
        @csrf

        <div>
        <x-input-label for="services" :value="__('Select Services')" />
     
        <select class="js-example-basic-multiple mt-1 block w-full" name="services[]" multiple="multiple">
        @foreach($services as $service)
    <option @if(in_array($service, $latest_services)) selected @endif>{{ $service }}</option>
@endforeach
</select>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
