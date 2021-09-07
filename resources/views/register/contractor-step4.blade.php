<x-form-fullscreen>
    <x-slot name="content">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="password" class="form-label">Please choose a Password to Submit</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="" value="{{ $sC->email ?? '' }}">
                @error('password')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="password" class="form-text light">At least 8 charcters</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="" value="{{ $sC->email ?? '' }}">
                @error('password_confirmation')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="password_confirmation" class="form-text light">Please retype your password</div>
                @enderror
            </div>
            <div class="md-12">
                <a href="{{ URL::route('register.contractor-step3') }}" class="btn btn-outline-light">Back</a>
                <a href="{{ URL::route('homepage') }}" class="btn btn-outline-light">Cancel</a>
                <button type="submit" class="btn btn-outline-light">Submit</button>
            </div>

        </form>
    </x-slot>
</x-form-fullscreen>
