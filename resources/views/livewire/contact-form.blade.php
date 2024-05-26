<div class="max-w-md mx-auto bg-white p-8 rounded-lg mb-24 mt-10 shadow-lg">
    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div>
            <label for="name" class="block text-stone-600 text-sm font-bold mb-2">Nimi</label>
            <input type="text" id="name" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-stone-700 text-sm border-gray-300 leading-tight @error('name') border-red-500 @enderror" >
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
            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-stone-600 hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-stone-500">
               Saada sõnum
            </button>
        </div>
    </form>
</div>
