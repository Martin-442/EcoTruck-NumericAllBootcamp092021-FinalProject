<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Equipment Register') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Provider
                </div>
            </div>
        </div>
    </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="">
                    @csrf

                        <!-- Truck Details -->
                        <h3>Welcome Provider</h3>
                        <p>register truck with below information</p>
                        <div>
                            <x-label for="truck_type" :value="__('Truck Type')" />

                            <x-input id="truck_type" class="block mt-1 w-full" type="text" name="truck_type" :value="old('truck_type')" required autofocus />
                        </div>
                        <div>
                            <x-label for="brand" :value="__('Brand')" />

                            <x-input id="brand" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required autofocus />
                        </div>
                        <div>
                            <x-label for="model" :value="__('Model')" />

                            <x-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required autofocus />
                        </div>
                        <div>
                            <x-label for="year" :value="__('Year')" />

                            <x-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required autofocus />
                        </div>
                        <div>
                            <x-label for="fuel" :value="__('Fuel')" />

                            <x-input id="fuel" class="block mt-1 w-full" type="text" name="fuel" :value="old('fuel')" required autofocus />
                        </div>
                        <div>
                            <x-label for="mileage" :value="__('Mileage')" />

                            <x-input id="mileage" class="block mt-1 w-full" type="text" name="mileage" :value="old('mileage')" required autofocus />
                        </div>
                        <div>
                            <x-label for="capacity" :value="__('Capacity')" />

                            <x-input id="capacity" class="block mt-1 w-full" type="text" name="capacity" :value="old('capacity')" required autofocus />
                        </div>
                        <!-- Address -->
                        <div>
                            <x-label for="located_place" :value="__('Located Place')" />

                            <x-input id="located_place" class="block mt-1 w-full" type="text" name="located_place" :value="old('located_place')" required autofocus />
                        </div>

                        <div>
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
                        </div>
                        <div>
                            <x-label for="postal_code" :value="__('Postal Code')" />

                            <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required autofocus />
                        </div>
                        <div>
                            <x-label for="specification" :value="__('Specification')" />

                            <x-input id="specification" class="block mt-1 w-full" type="text" name="specification" :value="old('specification')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-4">
                                {{ __('Add equipment') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

