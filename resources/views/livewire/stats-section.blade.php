<section class="py-12 bg-gray-50 backgr-fade overflow-hidden">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-1 p-6 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($stats as $stat)
                <div class="bg-white p-6 rounded-lg shadow-lg gradient-text">
                    <div class="text-4xl font-bold text-stone-700" style="font-family: allura; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"><span class="grad">{{ $stat['value'] }}</span></div>
                    <div class="text-lg font-light text-stone-500">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>