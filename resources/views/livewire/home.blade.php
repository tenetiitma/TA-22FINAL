<div class="max-w-screen-xl px-4 mx-auto space-y-12 sm:px-6 lg:px-8">
    <!-- INTRO INFO -->
    <section class="family">
        <div class="max-w-screen-xl px-8 py-24 mx-auto">
            <div class="max-w-xl mx-auto family-box rounded-lg p-6 text-stone-600 text-center">
                <p class="text-3xl font-medium sm:text-5xl" style="font-family: allura">
                    Hoiame traditsioone ja kehad soojas!
                </p>

                <p class="mt-4 font-light sm:leading-relaxed sm:text-xl">
                    <span class="font-semibold">WÖÖL</span> on väike pereettevõte Kuressaares, mis on üle 25 aasta müünud oma kudumeid Kuressaare Turul.
                    <br><br>Kõik tooted on valmistatud käsitööna Saaremaal ❤️
                </p>

            </div>
        </div>
    </section>

    <!-- RANDOM COLLECTION PROMOTION -->
    @if ($this->randomCollection)
    <section class="text-stone-600">
        <p class="text-2xl lg:text-3xl">UUED TOOTED KATEGOORIAS</p>
        <p class="text-2xl font-bold lg:text-3xl">
            {{ $this->randomCollection->translateAttribute('name') }}
        </p>

        <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8 mb-12">
            @foreach ($this->randomCollection->products->take(4) as $product)
            <x-product-card :product="$product" />
            @endforeach
        </div>
    </section>
    @endif

    <x-aboutus-banner />

    @livewire('stats-section')
    <br>
</div>