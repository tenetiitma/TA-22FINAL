<section>
    @if ($subCollection)
    <div class="max-w-screen-xl text-stone-600 text-center px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($subCollection as $collection)
                <div class="relative hover:scale-110 transition-transform duration-300">
                    <img class="w-56 h-56 rounded-full object-cover opacity-30 mx-auto shadow-bottom" src="{{ asset('images/kiri.jpg') }}" alt="{{ $collection->translateAttribute('name') }}" />
                    <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}" class="absolute inset-x-0 bottom-1/3 text-center py-2 text-slate-600 uppercase text-lg transition-colors duration-300">
                        <span class="hover-bg">{{ $collection->translateAttribute('name') }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</section>
