<x-form-fullscreen>
    <x-slot name="headStyle-tmp">
        <style>
            [class*="col"] {
                background-color: #33b5e5;
                border: 2px solid white;
                color: white;
                text-align: center;
            }
            [class*="con"] {
                background-color: #9e33e5;
                border: 2px solid white;
                color: white;
                text-align: center;
            }
        </style>
    </x-slot>
    <x-slot name="content">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="" value="{{ $sC->company_name ?? '' }}">
                @error('company_name')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="company_name" class="form-text light">The name of your company</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="" value="{{ $sC->company_name ?? '' }}">
                @error('address')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="address" class="form-text light">Street and Number</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="" value="{{ $sC->zip_code ?? '' }}">
                    @error('zip_code')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="zip_code" class="form-text light">Zip Code</div>
                    @enderror
                </div>
                <div class="col-md-9">
                    <label for="city" class="form-label">City</label>
                    <select class="form-control" data-style="btn-primary" id="city" name="city">
                        <option selected>Select a city</option>
                        @foreach ($stops as $stop)
                        <option value="{{ $stop['stop'] }}" <?php // if($sC->city == $stop['stop']) { echo 'selected'; } ?>>{{ $stop['stop'] }}</option>
                        @endforeach
                    </select>
                    @error('city')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="city" class="form-text light">Location of your comany</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{ $sC->phone ?? '' }}">
                @error('phone')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="phone" class="form-text light">Your phone number</div>
                @enderror
            </div>
            <hr>
            <div class="md-12">
                <a href="{{ URL::route('register.contractor-step1') }}" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </x-slot>
</x-form-fullscreen>
