<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Provider') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Provider
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Equiments: <a href=""></a>
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

            <!-- Truck Details -->
            <h3>Welcome Provider</h3>
            <p>Fill information form</p>
            <div>
                <x-label for="type" :value="__('Equipment Type')" />

                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />
            </div>
            <div>
                <x-label for="brand" :value="__('Equipment brand')" />

                <x-input id="brand" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required autofocus />
            </div>
            <div>
                <x-label for="model" :value="__('Equipment Model')" />

                <x-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required autofocus />
            </div>
            <div>
                <x-label for="year" :value="__('Equipment Year')" />

                <x-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required autofocus />
            </div>
            <div>
                <x-label for="milage" :value="__('Equipment Milage')" />

                <x-input id="milage" class="block mt-1 w-full" type="text" name="milage" :value="old('milage')" required autofocus />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"> <!-- Trucks PAGE -->

                </a>

                <x-button class="ml-4">
                    {{ __('Sumbit') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>




