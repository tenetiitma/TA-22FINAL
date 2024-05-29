<footer class="bg-gray-50">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 text-center lg:text-left">
            <div class="flex justify-center">
                <ul class="max-w-sm mt-4 text-gray-500 font-light text-sm">
                    <li><img src="{{ asset('images/logotrans.png')}}" class="h-28 w-auto mx-auto lg:mx-0" alt="Logo"></li>
                </ul>
            </div>
            
            <div>
                <p class="text-gray-600 font-semibold">E-pood</p>
                <ul class="mt-4 text-gray-500 font-light text-sm">
                    <li class="mb-2"><a href="/kkk" class="hover:underline">KKK</a></li>
                    <li class="mb-2"><a href="/sales-terms" class="hover:underline">Müügitingimused</a></li>
                    <li class="mb-2"><a href="/return-policy" class="hover:underline">Tagastamistingimused</a></li>
                    <li class="mb-2"><a href="/privacy-policy" class="hover:underline">Privaatsuspoliitika</a></li>
                </ul>
            </div>
            
            <div>
                <p class="text-gray-600 font-semibold">Wööl'i perekond</p>
                <ul class="mt-4 text-gray-500 font-light text-sm">
                    <li class="mb-2"><a href="/about" class="hover:underline">Meist</a></li>
                    <li class="mb-2"><a href="/contact" class="hover:underline">Kontakt</a></li>
                </ul>
                <div class="flex justify-center lg:justify-start gap-4 mt-4">
                    <a href="https://www.facebook.com/Woolkudumid" target="_blank" class="text-gray-500 hover:text-gray-700"><x-brand.facebook /></a>
                    <a href="https://www.instagram.com/woolkudumid/" target="_blank" class="text-gray-500 hover:text-gray-700"><x-brand.instagram /></a>
                </div>
            </div>
        </div>
        <p class="pt-4 mt-8 text-sm text-gray-500 border-t border-gray-200">
            &copy; {{ now()->year }} WÖÖL
        </p>
    </div>
</footer>
