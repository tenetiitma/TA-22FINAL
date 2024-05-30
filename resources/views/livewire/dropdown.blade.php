<div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
    <!-- WOMEN -->
    @if($naisedCollection)
    <a href="{{ route('collection.view', $naisedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $naisedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 text-sm" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- DROPDOWN MENU -->
        <ul>@foreach ($naisedSubCollection as $collection)
            <li class="block px-4 py-2 hover:bg-gray-100 transition hover:opacity-80"><a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">{{ $collection->translateAttribute('name') }}</a></li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- MEN -->
    @if($mehedCollection)
    <a href="{{ route('collection.view', $mehedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $mehedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 text-sm" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- DROPDOWN MENU -->
        <ul>@foreach ($mehedSubCollection as $collection)
            <li class="block px-4 py-2 hover:bg-gray-100 transition hover:opacity-80"><a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">{{ $collection->translateAttribute('name') }}</a></li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- CHILDREN -->
    @if($lapsedCollection)
    <a href="{{ route('collection.view', $lapsedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $lapsedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 text-sm" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- DROPDOWN MENU -->
        <ul>@foreach ($lapsedSubCollection as $collection)
            <li class="block px-4 py-2 hover:bg-gray-100 transition hover:opacity-80"><a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">{{ $collection->translateAttribute('name') }}</a></li>
            @endforeach
        </ul>
    </div>
    @endif
</div>