<header class="relative border-b border-gray-100">
    <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a class="flex items-center flex-shrink-0" href="{{ url('/') }}">
                <span class="sr-only">Home</span>
                <x-brand.wool />
            </a>
            <nav class="hidden lg:gap-4 lg:flex lg:ml-8">
                @livewire('dropdown', ['naisedCollection' => $naisedCollection, 'naisedSubCollection' => $naisedSubCollection])
                @livewire('dropdown', ['mehedCollection' => $mehedCollection, 'mehedSubCollection' => $mehedSubCollection])
                @livewire('dropdown', ['lapsedCollection' => $lapsedCollection, 'lapsedSubCollection' => $lapsedSubCollection])
            </nav>
        </div>

        <div class="flex items-center justify-between flex-1 ml-4 lg:justify-end">
            <x-header.search class="max-w-sm mr-4" />

            <div class="flex items-center -mr-4 sm:-mr-6 lg:mr-0">
                @livewire('components.cart')

                <div x-data="{ mobileMenu: false }">
                    <button x-on:click="mobileMenu = !mobileMenu" class="grid flex-shrink-0 w-16 h-16 border-l border-gray-100 lg:hidden">
                        <span class="sr-only">Toggle Menu</span>

                        <span class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </span>
                    </button>

                    <div x-cloak x-transition x-show="mobileMenu" class="absolute right-0 top-auto z-50 w-screen p-4 sm:max-w-xs">
                        <ul x-on:click.away="mobileMenu = false" class="p-6 space-y-4 bg-white border border-gray-100 shadow-xl rounded-xl">
                            <!-- WOMEN MENU -->
                            <li>
                                <div x-data="{ openNaisedSubMenu: false }">
                                    <a wire:click.prevent="$toggle('openNaisedSubMenu')" href="#" class="text-md font-semibold text-stone-600 uppercase transition hover:opacity-50">
                                        {{ $naisedCollection->translateAttribute('name') }}
                                    </a>
                                    @if($openNaisedSubMenu)
                                    <ul class="pt-4">
                                        @foreach($naisedSubCollection as $collection)
                                        <li class="ml-6 mb-2">
                                            <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}" class="text-md text-stone-600 uppercase transition hover:opacity-50">
                                                {{ $collection->translateAttribute('name') }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </li>
                            <!-- MEN MENU -->
                            <li>
                                <div x-data="{ openMehedSubMenu: false }">
                                    <a wire:click.prevent="$toggle('openMehedSubMenu')" href="#" class="text-md font-semibold text-stone-600 uppercase transition hover:opacity-50">
                                        {{ $mehedCollection->translateAttribute('name') }}
                                    </a>
                                    @if($openMehedSubMenu)
                                    <ul class="pt-4">
                                        @foreach($mehedSubCollection as $collection)
                                        <li class="ml-6 mb-2">
                                            <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}" class="text-md text-stone-600 uppercase transition hover:opacity-50">
                                                {{ $collection->translateAttribute('name') }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </li>
                            <!-- CHILDREN MENU -->
                            <li>
                                <div x-data="{ openLapsedSubMenu: false }">
                                    <a wire:click.prevent="$toggle('openLapsedSubMenu')" href="#" class="text-md font-semibold text-stone-600 uppercase transition hover:opacity-50">
                                        {{ $lapsedCollection->translateAttribute('name') }}
                                    </a>
                                    @if($openLapsedSubMenu)
                                    <ul class="pt-4">
                                        @foreach($lapsedSubCollection as $collection)
                                        <li class="ml-6 mb-2">
                                            <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}" class="text-md text-stone-600">
                                                {{ $collection->translateAttribute('name') }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>