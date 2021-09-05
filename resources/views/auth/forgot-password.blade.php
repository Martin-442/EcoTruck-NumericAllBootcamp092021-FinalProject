<x-form-fullscreen>
    <x-slot name="content">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <div class="md-12">

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" :value="old('email')" required autofocus>

                </div>

                <div class="md-12 mt-4">
                    <button type="submit" class="btn btn-outline-light rounded-md">{{ __('Email Password Reset Link') }}</button>
                </div>

            </form>

        </div>
        <div class="md-12 py-4">
            <a href="{{ URL::route('homepage') }}" class="btn btn-outline-light">Back to Homepage</a>
        </div>
    </x-slot>
</x-form-fullscreen>
