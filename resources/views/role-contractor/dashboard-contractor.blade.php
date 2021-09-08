<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Contractor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Contractor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Booking Details -->
            <h3>Welcome Contractor</h3>
            <p>Fill booking information form</p>
            <div>
                <x-label for="date" :value="__('Pick up Date')" />

                <x-input id="date" class="block mt-1 w-full" type="text" name="date" :value="old('date')" required autofocus />
            </div>
            <div>
                <x-label for="time" :value="__('Time')" />

                <x-input id="time" class="block mt-1 w-full" type="text" name="time" :value="old('time')" required autofocus />
            </div>
            <div>
                <x-label for="weight" :value="__('Weight')" />

                <x-input id="weight" class="block mt-1 w-full" type="text" name="time" :value="old('weight')" required autofocus />
            </div>
            <div>
                <x-label for="location" :value="__('Constraction Site Location')" />

                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
            </div>
            <!-- Address -->
            <div>
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
            </div>
            <div>
                <x-label for="postal_code" :value="__('Postal Code')" />

                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required autofocus />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard_contractor') }}"> <!-- where user can see all the bookings -->
                </a>

                <x-button class="ml-4">
                    {{ __('Cancel Request') }}
                </x-button>
                <x-button class="ml-4">
                    {{ __('Sumbit Request') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>

