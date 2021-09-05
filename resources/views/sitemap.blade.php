<x-homepage-layout>
    <x-slot name="header"></x-slot>
    <x-slot name="navscroller"></x-slot>

    <x-slot name="jumbotron">
        <div class="jumbotron p-3 p-md-5 text-dark rounded bg-primary">
            <div class="col-md-12 px-0">
                <div class="list-group">
                    @foreach ($routesExamples as $key => $route)
                        @if (isset($route->action['arg']))
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ $route->action['arg']['route'] }}">{{ $route->action['as']}} ({{ $route->action['arg']['arg'] }}={{ $route->action['arg']['value'] }})</a>
                        @else
                            <a class="list-group-item list-group-item-action list-group-item-primary" href="/{{ $route->uri }}">{{ $route->uri}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
          </div>
    </x-slot>

    <x-slot name="providerCTA"></x-slot>
    <x-slot name="contractorCTA"></x-slot>
</x-homepage-layout>

