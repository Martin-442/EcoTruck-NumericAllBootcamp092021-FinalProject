<x-form-fullscreen>
    <x-slot name="content">
        <div class="mb-3">
            <ul class="list-group bg-light">
                <li  class="list-group-item"><span class="fw-bold">First Name:</span>
                    {{ $sU->first_name ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Last Name:</span>
                    {{ $sU->last_name ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Email Address:</span>
                    {{ $sU->email ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Company Name:</span>
                    {{ $sC->company_name ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Street:</span>
                    {{ $sC->address ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">City:</span>
                    {{ $sC->city ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Zip Code:</span>
                    {{ $sC->zip_code ?? '' }}
                </li>
                <li class="list-group-item"><span class="fw-bold">Phone Number:</span>
                    {{ $sC->phone ?? '' }}
                </li>
            </ul>
        </div>
        <div class="mb-3">
            <p>Is your input correct? </p>
            <a href="{{ URL::route('register.contractor-step2') }}" class="btn btn-outline-light">Back</a>
            <a href="{{ URL::route('register.contractor-step4') }}" class="btn btn-outline-light">Next</a>
        </div>
    </x-slot>
</x-form-fullscreen>
