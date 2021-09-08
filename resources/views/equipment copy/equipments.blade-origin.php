<x-form-fullscreen>
    <x-slot name="content"> 
        
    
    <div class="ms-2 me-auto">
        <div class="fw-bold fs-4 py-3">Equipments and Booking information</div>
    </div>

    <div class="d-grid gap-2">
    <a class="btn btn-secondary btn-lg btn-block" href="{{ URL::route('equipment.equipment-new') }}">Add new equipment</a><br>
    </div>

        @if($message = Session::get('success'))
            <p style="color:white">{{$message}}</p>
        @endif
    
    <div class="ms-2 me-auto">
        <div class="fw-bold fs-4 py-3">Available Equipments:</div>
    </div>

    <ul class="list-group list-group">
        @foreach ($equipments as $equipment)
        <li class="list-group-item d-flex justify-content-between align-items-start" style= "margin-bottom:5px;">  
            <div class="ms-2 me-auto">           
                <p><strong>Brand: </strong> {{$equipment->brand}}</p>
                <p><strong>Model: </strong> {{$equipment->model}}</p>
                <p><strong>Mileage: </strong> {{$equipment->mileage}}</p>
                <p><strong>City: </strong> {{ $equipment->city }}</p>
                    <!-- creating link using the name of the route (check equipment.php file)  -->
                <a class="btn btn-primary btn-sm"  href="{{ route('equipment.equipment-show', [$equipment->id])}}">Details</a>
                <a class="btn btn-secondary btn-sm"  href="{{ route('update.equipment-update', [$equipment->id])}}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ route('delete.equipment', [$equipment->id])}}">Delete this equipment ?</a>
            </div>
        </li>
        @endforeach
    </ul>             
        
    <hr>
    <div class="ms-2 me-auto">
        <div class="fw-bold fs-4 py-3">Upcoming Booking:</div>
    </div>
    <ul class="list-group list-group">    
        @foreach ($bookings as $booking)
        <li class="list-group-item d-flex justify-content-between align-items-start" style= "margin-bottom:5px;">  
            <div class="ms-2 me-auto">         
                <p><strong>construction site : </strong> {{ $booking->construction_site }}</p>
                <p><strong>Dump site : </strong> {{ $booking->dump_site }}</p>
                <p><strong>Booking date: </strong> {{ $booking->booking_date }}</p>
            </div>
        </li>    
        @endforeach
    </ul> 
    <hr>
    
</x-slot>
</x-form-fullscreen>