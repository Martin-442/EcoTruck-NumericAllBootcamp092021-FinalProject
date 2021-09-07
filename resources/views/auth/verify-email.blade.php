<x-form-fullscreen>
    <x-slot name="content">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="md-12">
            <form method="POST" action="{{ route('verification.send') }}" style="float:left; margin-right: 20px;">
                @csrf
                <button type="submit" class="btn btn-primary">{{ __('Resend Verification Email') }}</button>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary">{{ __('Log Out') }}</button>
            </form>
        </div>
        <hr>
        <div class="md-12 py-4">
            <a href="{{ URL::route('homepage') }}" class="btn btn-primary">Back to Homepage</a>
        </div>
    </x-slot>
</x-form-fullscreen>
