<x-form-fullscreen>
    <x-slot name="content">    
   
        <h3>Welcome Provider</h3>
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                
                <label for="truck_type" class="form-label">Truck Type</label>
                <!--input type="text" class="form-control" id="truck_type" name="truck_type" placeholder="" value="{{ $equipment->truck_type ?? '' }}"-->
                <select class="form-control" id="truck_type" name="truck_type" placeholder="" value="{{ $equipment->truck_type ?? '' }}">
                    <option>Select One</option>
                    <option value="Standard">Standard</option>
                    <option value="Semi Trailer">Semi Trailer</option>
                    <option value="Dump Truck">Dump Truck</option>
                    <option value="Truck Pup">Truck Pup</option>
                </select>
                @error('truck_type')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="truck_type" class="form-text light">Enter your Truck Type</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" placeholder="" value="{{ $equipment->brand ?? '' }}">
                    @error('brand')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="brand" class="form-text light">Enter The Brand</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="" value="{{ $equipment->model ?? '' }}">
                    @error('model')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="model" class="form-text light">Enter The Model</div>
                    @enderror
                </div>
            </div>
            <!-- --------------------- -->
            <div class="row">
                <div class="col-md-6">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="" value="{{ $equipment->year ?? '' }}">
                    @error('year')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="year" class="form-text light">Enter The year</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="fuel" class="form-label">Fuel</label>
                    <input type="text" class="form-control" id="fuel" name="fuel" placeholder="" value="{{ $equipment->fuel ?? '' }}">
                    @error('fuel')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="fuel" class="form-text light">Enter The Fuel</div>
                    @enderror
                </div>
            </div>
            <!-- --------------------- -->
            <div class="row">
                <div class="col-md-6">
                    <label for="mileage" class="form-label">Mileage</label>
                    <input type="text" class="form-control" id="mileage" name="mileage" placeholder="" value="{{ $equipment->mileage ?? '' }}">
                    @error('mileage')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="mileage" class="form-text light">Enter The Fuel Consume</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="text" class="form-control" id="capacity" name="capacity" placeholder="" value="{{ $equipment->capacity ?? '' }}">
                    @error('capacity')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="capacity" class="form-text light">Truck Capacity in volume m&sup3</div>
                    @enderror
                </div>
            </div>
            <!-- --------------------- -->
            <div class="row">
                <div class="col-md-6">
                    <label for="truck_location" class="form-label">Truck_location</label>
                    <input type="text" class="form-control" id="truck_location" name="truck_location" placeholder="" value="{{ $equipment->truck_location ?? '' }}">
                    @error('truck_location')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="truck_location" class="form-text light">Enter The Truck Location</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="" value="{{ $equipment->city ?? '' }}">
                    @error('city')<div class="alert alert-danger p-1">{{ $message }}</div>
                    @else
                    <div id="city" class="form-text light">Enter the city</div>
                    @enderror
                </div>
            </div>
            <!-- --------------------- -->
            <div class="mb-3">
                <label for="postal_code" class="form-label">Postal Code</label>
                <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="" value="{{ $equipment->postal_code ?? '' }}">
                @error('postal_code')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="postal_code" class="form-text light">Enter The Postal Code</div>
                @enderror
            </div>
            <!-- --------------------- -->
            <div class="mb-3">
                <label for="specification" class="form-label">Specification</label>
                <input type="specification" class="form-control" id="specification" name="specification" placeholder="" value="{{ $equipment->specification ?? '' }}">
                @error('specification')<div class="alert alert-danger p-1">{{ $message }}</div>
                @else
                <div id="specification" class="form-text light">Specification About Truck</div>
                @enderror
            </div>
            <!-- Submit buttun -->
            <div class="md-12">
                <a href="{{ URL::route('dashboard_provider') }}" class="btn btn-outline-light">Cancel</a>
                <button type="submit" class="btn btn-outline-light">Add Equipment</button>
            </div>
    </form>
    </div>
    </x-slot>
</x-form-fullscreen>

