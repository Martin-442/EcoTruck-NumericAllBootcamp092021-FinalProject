<x-homepage-layout>
    <x-slot name="header">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-4 pt-1">
                <a class="text-muted" href="#"></a>
              </div>
              <div class="col-4 text-center">
                <a class="blog-header-logo text-primary" href="#">EcoTruck</a>
              </div>
              <div class="col-4 d-flex justify-content-end align-items-center">
                @if (!Auth::guest())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-primary">{{ __('Log Out') }}</button>
                    </form>
                @endif

              </div>
            </div>
        </header>
        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Log out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Do you want to log out?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="navscroller">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
              <a class="p-2 text-muted" href="#">World</a>
            </nav>
        </div>
    </x-slot>

    <x-slot name="jumbotron">
        <div class="jumbotron p-3 p-md-10 text-white rounded bg-primary">
            <div class="col-md-12 px-0">
              <h1 class="display-4 font-italic">Our mission: <br> Reducing CO&sup2; emission!</h1>
              <p class="lead my-3">We believe that every km driven less on <br> Luxembourgish roads is a great win for all of us! <br> An ecomony driver by our shared goal to protect our environment <br> and to have sustainable developments!</p>
            </div>
        </div>
    </x-slot>

    <x-slot name="providerCTA">
        <div class="col-md-6">
            <div class="card flex-md-row mb-10 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">As a Provider</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Join the Pool</a>
                    </h3>
                    <p class="card-text mb-auto">You want to contribute to the idea. <br> Reduce CO&sup2; emission and add your Truck to the pool.</p>
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
                    <a class="text-dark" href="#">Responsible construction planning</a>
                    </h3>
                    <p class="card-text mb-auto">You're construction site needs material to be removed? Join the platform and choose the nearest truck available to your construction site.</p>
                    <div class="col-md-10 cta-button">
                        <a href="{{ route('register.contractor-step1') }}" class="btn btn-lg btn-block btn-primary">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-lg btn-block btn-outline-primary">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-homepage-layout>
