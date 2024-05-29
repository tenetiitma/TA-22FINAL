<footer class="bg-gray-50 rounded">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 text-center lg:text-left">
             <!-- LOGO INFO -->
            <div class="flex justify-center">
                <ul class="max-w-sm mt-4 text-stone-500 font-light text-sm">
                    <li><img src="{{ asset('images/tranlog.png')}}" class="h-10 mb-4 w-auto mx-auto lg:mx-0" alt="Logo"></li>
                    <li><p>(+372) 51 01 204</p></li>
                    <li><a href="mailto:woolkudumid@gmail.com" class="hover:underline">woolkudumid@gmail.com</a></li>
                </ul>
            </div>
            <!-- SHOP INFO -->
            <div class="md:border-l md:border-gray-200 md:pl-12">
                <p class="text-stone-600 font-semibold">E-pood</p>
                <ul class="mt-4 text-stone-500 font-light text-sm">
                    <li class="mb-2"><a href="/kkk" class="hover:underline">KKK</a></li>
                    <li class="mb-2"><a href="/sales-terms" class="hover:underline">Müügitingimused</a></li>
                    <li class="mb-2"><a href="/return-policy" class="hover:underline">Tagastamistingimused</a></li>
                    <li class="mb-2"><a href="/privacy-policy" class="hover:underline">Privaatsuspoliitika</a></li>
                </ul>
            </div>
             <!-- ABOUT US INFO -->
            <div>
                <p class="text-stone-600 font-semibold">Wööl'i perekond</p>
                <ul class="mt-4 text-stone-500 font-light text-sm">
                    <li class="mb-2"><a href="/about" class="hover:underline">Meist</a></li>
                    <li class="mb-2"><a href="/contact" class="hover:underline">Kontakt</a></li>
                </ul>
                <div class="flex justify-center lg:justify-start gap-2 mt-4">
                    <a href="https://www.facebook.com/Woolkudumid" target="_blank" class="text-stone-500 hover:text-stone-700"><x-brand.facebook /></a>
                    <a href="https://www.instagram.com/woolkudumid/" target="_blank" class="text-stone-500 hover:text-stone-700"><x-brand.instagram /></a>
                </div>
            </div>
        </div>
        <p class="pt-4 mt-8 text-sm text-stone-400 ">
            &copy; {{ now()->year }} WÖÖL
        </p>
    </div>
</footer>
