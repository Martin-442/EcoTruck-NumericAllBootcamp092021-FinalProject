<x-form-fullscreen>
    <x-slot name="content">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome, You're logged in! Select correct profile from below list
                </div>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary btn-lg btn-block" href="{{ URL::route('dashboard_admin') }}">Admin</a>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ URL::route('dashboard_provider') }}">Provider</a>
                </div>
                <br>
                <div class="d-grid gap-2 col-9 mx-auto">
                    <a class="btn btn-primary btn-lg btn-block" href="{{ URL::route('dashboard_contractor') }}">Contractor</a>
                </div>
                
            </div>
        </div>
    </div>
    
    </x-slot>
</x-form-fullscreen>