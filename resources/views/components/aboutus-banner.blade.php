<section class="relative backgr-fade py-16 overflow-hidden">
    <div class="container mx-auto text-stone-600 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="lg:order-2">
                <p class="text-5xl font-bold mb-4 text-center" style="font-family: allura">Kes me oleme...</p>
                <p class="text-lg mb-6 leading-relaxed text-center lg:text-left">Meie andekas meister <span class="font-semibold">Piret</span> on tegelenud Saaremaal käsitööga juba üle 25 aasta! Siiani on meie armastusega kootud kudumeid olnud võimalik osta Kuressaare Turult!</p>
                <p class="text-lg mb-6 leading-relaxed text-center lg:text-left">Meie tooted on valmistatud lamba- ja meriinovillast, mis on 100% naturaalsed. Peame kõrgelt lugu ka jätkusuutlikkusest.</p>
                <p class="text-lg mb-6 leading-relaxed text-center lg:text-left">Mida tähendab <span class="font-semibold">WÖÖL</span>?</p>
                <p class="text-lg mb-2 leading-relaxed text-center underline underline-offset-2 font-bold transition hover:opacity-50"><a href="{{ route('about.view') }}">Vaata lisaks</a></p>
            </div>
            <div class="relative lg:order-1">
                <div class="lg:absolute lg:top-0 lg:right-0 lg:w-36 lg:h-full lg:bg-gradient-to-r lg:from-transparent lg:to-gray-100"></div>
                <img class="w-full h-auto rounded" src="{{ asset('images/us.jpeg') }}" alt="About Image">
            </div>
        </div>
    </div>
</section>