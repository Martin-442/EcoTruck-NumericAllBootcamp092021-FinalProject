<x-homepage-layout>

    <x-slot name="jumbotron">
        <div class="jumbotron bg-primary">
            <h1 class="display-4 text-white">Our mission: <br> Reducing CO<sub>2</sub> emission!</h1>
            <p class="lead text-white">We believe that every km driven less on <br> Luxembourgish roads is a great win for all of us!</p>
            <hr class="my-4 text-white">
            <p class="text-white">An ecomony driver by our shared goal to protect our environment and to have sustainable developments!</p>
            <a href="{{ route('aboutus') }}" class="btn btn-lg btn-light md-2">Learn more</a>
        </div>
    </x-slot>

    <x-slot name="providerCTA">
        <div class="col-md-6">
            <div class="card flex-md-row mb-10 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">As a Provider</strong>
                    <h3 class="mb-0">
                        <a href="{{ route('dashboard_provider') }}">Join the Pool</a>
                    </h3>
                    <p class="card-text mb-auto">You want to contribute to the idea. <br> Reduce CO<sub>2</sub> emission and add your Truck to the pool.</p>
                    <div class="col-md-10 cta-button">
                        <a href="{{ route('register.provider-step1') }}" class="btn btn-lg btn-block btn-primary">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-lg btn-block btn-outline-primary">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="contractorCTA">
        <div class="col-md-6">
            <div class="card flex-md-row mb-10 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">As a Contractor</strong>
                    <h3 class="mb-0">
                    <a href="/dashboard">Responsible construction planning</a>
                    </h3>
                    <p class="card-text mb-auto">Your construction site needs material to be removed? Join the platform and choose the nearest truck available to your construction site.</p>
                    <div class="col-md-10 cta-button">
                        <a href="{{ route('register.contractor-step1') }}" class="btn btn-lg btn-block btn-primary">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-lg btn-block btn-outline-primary">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-homepage-layout>
