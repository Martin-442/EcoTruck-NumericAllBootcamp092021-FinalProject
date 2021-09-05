<x-form-fullscreen>
    <x-slot name="content">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="" :value="old('password')" required autocomplete="current-password">
            </div>

            <button type="submit" class="btn btn-outline-light rounded-md">{{ __('Confirm') }}</button>

        </div>
    </form>

    <div class="md-12 py-4">
        <a href="{{ URL::route('homepage') }}" class="btn btn-outline-light">Back to Homepage</a>
    </div>

    </x-slot>
</x-form-fullscreen>
