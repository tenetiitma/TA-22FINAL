<section>
    <div class="max-w-screen-xl text-stone-600 px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <p class="text-3xl uppercase font-bold">
            {{ $this->collection->translateAttribute('name') }}
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($this->collection->products as $product)
            <x-product-card :product="$product" />
            @empty
            @endforelse
        </div>
    </div>
</section>