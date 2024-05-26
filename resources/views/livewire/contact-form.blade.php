<div class="max-w-screen-xl px-6 py-32 mx-auto sm:px-12">
    <div class="mx-auto text-center text-stone-600">
        <p class="text-3xl font-medium sm:text-5xl">KONTAKT</p>
    </div><br><br>
    <div class="text-md text-center text-stone-600">
        <p class="font-bold text-xl sm:text-2xl">WÖÖL DISAIN OÜ</p>
        <p>Reg nr 16227243</p>
        <br>
        <p>woolkudumid@gmail.com</p>
        <p>(+372) 5101204</p>
        <p class="mb-12">Saaremaa, Kuressaare</p><br>
        <p class="font-semibold text-center mx-auto max-w-xl">Soovid informatsiooni toote kohta, mida hetkel müügist ei leia või on muid toodetega seotud küsimusi, siis kirjuta meile julgelt ja võtame Sinuga ühendust!</p>
    </div>

    <div class="grid grid-cols-2 mt-12 gap-6">
        <div class="max-w-md bg-white p-8 mt-10 mb-2 rounded-lg shadow-lg">
            @if (session()->has('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-6">
                <div>
                    <label for="name" class="block text-stone-600 text-sm font-bold mb-2">Nimi</label>
                    <input type="text" id="name" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-stone-700 text-sm border-gray-300 leading-tight @error('name') border-red-500 @enderror">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="email" class="block text-stone-600 text-sm font-bold mb-2">E-mail</label>
                    <input type="email" id="email" wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-stone-700 text-sm border-gray-300 leading-tight @error('email') border-red-500 @enderror">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="message" class="block text-stone-600 text-sm font-bold mb-2">Sõnum</label>
                    <textarea id="message" wire:model="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-stone-700 text-sm border-gray-300 leading-tight @error('message') border-red-500 @enderror"></textarea>
                    @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-stone-600 hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-stone-500" wire:key="submit_btn" wire:loading.attr="disabled" wire:target="submit">
                        <span wire:loading.remove wire:target="submit">
                            Saada sõnum
                        </span>
                        <span wire:loading wire:target="submit">
                            <span class="inline-flex items-center">
                                Saadan
                                <x-icon.loading />
                            </span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
        <div>
            <p class="font-md mt-6 text-stone-600">ASUKOHT:</p>
            <img src="{{ asset('/images/adre.png') }}" alt="">
        </div>
    </div>

</div>