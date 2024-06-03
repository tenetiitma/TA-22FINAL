<section>
    @if ($subCollection)
    <div class="max-w-screen-xl text-stone-600 px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($subCollection as $collection)
            <li class="block py-2 hover:bg-gray-100 transition hover:opacity-80">
                <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                    {{ $collection->translateAttribute('name') }}
                </a>
            </li>
        @endforeach
        </div>
    </div>
    @endif
</section>