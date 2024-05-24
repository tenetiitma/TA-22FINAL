<div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
    @if($naisedCollection)
        <a href="{{ route('collection.view', $naisedCollection->defaultUrl->slug) }}" 
           class="text-sm text-stone-600 uppercase transition hover:opacity-50">
            {{ $naisedCollection->translateAttribute('name') }}
        </a>
        <div x-cloak class="absolute z-10 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" 
             x-show="open"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95">
            <!-- Dropdown menu items go here -->
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Menu Item 1</a>
            <a href="#" class="block px-4 py-2  hover:bg-gray-100">Menu Item 2</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Menu Item 3</a>
        </div>
    @endif
    @if($mehedCollection)
        <a href="{{ route('collection.view', $mehedCollection->defaultUrl->slug) }}" 
           class="text-sm text-stone-600 uppercase transition hover:opacity-50">
            {{ $mehedCollection->translateAttribute('name') }}
        </a>
        <div x-cloak class="absolute z-10 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" 
             x-show="open"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95">
            <!-- Dropdown menu items go here -->
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 1</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 2</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 3</a>
        </div>
    @endif
        @if($lapsedCollection)
        <a href="{{ route('collection.view', $lapsedCollection->defaultUrl->slug) }}" 
           class="text-sm text-stone-600 uppercase transition hover:opacity-50">
            {{ $lapsedCollection->translateAttribute('name') }}
        </a>
        <div x-cloak class="absolute z-10 left-0 mt-2 w-48 bg-white border border-gray-100 py-2 rounded-lg shadow-lg text-stone-600 font-light text-sm" 
             x-show="open"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95">
            <!-- Dropdown menu items go here -->
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 1</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 2</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Menu Item 3</a>
        </div>
    @endif
</div>