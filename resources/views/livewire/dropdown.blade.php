<div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
    @if($naisedCollection)
    <a href="{{ route('collection.view', $naisedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $naisedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- Dropdown menu items -->
        <a href="/collections/naiste-kampsunid" class="block px-4 py-2 hover:bg-gray-100">Naiste kampsunid</a>
        <a href="/collections/naiste-sallid" class="block px-4 py-2  hover:bg-gray-100">Naiste sallid</a>
        <a href="/collections/naiste-peapaelad" class="block px-4 py-2 hover:bg-gray-100">Naiste peapaelad</a>
        <a href="/collections/naiste-mutsid" class="block px-4 py-2 hover:bg-gray-100">Naiste mütsid</a>
    </div>
    @endif
    @if($mehedCollection)
    <a href="{{ route('collection.view', $mehedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $mehedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- Dropdown menu items -->
        <a href="/collections/meeste-kampsunid" class="block px-4 py-2 hover:bg-gray-200">Meeste kampsunid</a>
        <a href="/collections/meeste-mutsid" class="block px-4 py-2 hover:bg-gray-200">Meeste mütsid</a>
        <a href="/collections/meeste-sallid" class="block px-4 py-2 hover:bg-gray-200">Meeste sallid</a>
    </div>
    @endif
    @if($lapsedCollection)
    <a href="{{ route('collection.view', $lapsedCollection->defaultUrl->slug) }}" class="text-sm text-stone-600 uppercase transition hover:opacity-50">
        {{ $lapsedCollection->translateAttribute('name') }}
    </a>
    <div x-cloak class="absolute z-50 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-800" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <!-- Dropdown menu items -->
        <a href="/collections/laste-kampsunid" class="block px-4 py-2 hover:bg-gray-200">Laste kampsunid</a>
        <a href="/collections/komplektid" class="block px-4 py-2 hover:bg-gray-200">Komplektid</a>
    </div>
    @endif
</div>