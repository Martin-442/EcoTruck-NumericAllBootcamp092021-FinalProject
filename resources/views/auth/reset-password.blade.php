<x-form-fullscreen>
    <x-slot name="content">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="form-label">{{__('Email')}}</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="" :value="old('email', $request->email)" required autofocus>

                    </div>


                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label">{{__('New Password')}}</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                    </div>


                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label">{{__('Confirm New Password')}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="" required>
                    </div>



                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn btn-outline-light rounded-md">{{ __('Reset Password') }}</button>
                    </div>
                </form>

        <div class="md-12 py-4">
            <a href="{{ URL::route('homepage') }}" class="btn btn-outline-light">Back to Homepage</a>
        </div>
    </x-slot>
</x-form-fullscreen>
