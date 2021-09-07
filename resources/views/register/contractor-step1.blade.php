<x-form-fullscreen>
    <x-slot name="content">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="{{ $sU->first_name ?? '' }}">
                    @error('first_name')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="first_name" class="form-text light">Your first name</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="{{ $sU->last_name ?? '' }}">
                    @error('last_name')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="last_name" class="form-text light">Your surname</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $sU->email ?? '' }}">
                @error('email')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="email" class="form-text light">Your email address</div>
                @enderror
            </div>
            <hr>
            <div class="md-12">
                <a href="{{ URL::route('homepage') }}" class="btn btn-primary">Cancel</a>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </x-slot>
</x-form-fullscreen>
