<div x-data="{ open: false }" x-show="open" @open-modal.window="open = true" @close-modal.window="open = false" class="fixed inset-0 z-50 overflow-auto" style="display: none;">
    <div @click="open = false" class="fixed inset-0 bg-black bg-opacity-50"></div>
    <div class="relative w-full max-w-3xl px-4 py-16 mx-auto z-10 overflow-auto max-h-screen">
        <button @click="open = false" class="absolute top-0 right-0 m-4 text-white ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="flex justify-center">
            <img class="" src="{{ $imageUrl }}" alt="">
        </div>

    </div>
</div>