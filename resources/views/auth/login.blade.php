<x-form-fullscreen>
    <x-slot name="content">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" :value="old('email')" required autofocus>

            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="" :value="old('password')" required autocomplete="current-password">
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="btn btn-primary rounded-md" href="{{ route('password.request') }}" style="margin-right: 20px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- components/button.blade.php -->
                <button type="submit" class="btn btn-primary rounded-md">{{ __('Log in') }}</button>

            </div>
        </form>

        <div class="md-12 py-4">
            <a href="{{ URL::route('homepage') }}" class="btn btn-primary">Back to Homepage</a>
        </div>
    </x-slot>
</x-form-fullscreen>
