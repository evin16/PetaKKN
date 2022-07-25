<x-app-layout>



    {{-- Header --}}
    <x-slot name="header">
        {{-- Background --}}
        <img src="{{ asset('img/uns.png') }}" alt="uns-image" class="w-full absolute  bg-center mx-auto left-0 z-0 opacity-60 ">

        <div class="title pt-16">
            <h1 class="font-bold text-5xl w-1/3 leading-relaxed text-primary-textlight z-10 relative">
                Pemetaan Titik Lokasi KKN UNS 2022
            </h1>
        </div>

        <div class="subtitle pt-4">
            <h2 class="text-lg font-light w-[45%] leading-relaxed text-primary-textlight z-10 relative">
                KKN UNS dilaksanakan di berbagai lokasi, dengan menggunakan pemetaan titik lokasi, kita dapat mengetahui titik mana saja lokasi KKN UNS dilaksanakan.
            </h2>
        </div>

        <div class="pt-12 relative z-10">
            <button onclick="scrollToLokasi()" class="font-semibold text-primary-textlight bg-primary-red w-36 h-10 text-lg rounded-xl">
                Lokasi KKN
            </button>
        </div>

    </x-slot>


    {{-- Jumbotron --}}
    <div class="jumbotron text-primary-textdark bg-primary-textlight px-8 pt-16" id="lokasi_kkn">
        <div class="content max-w-7xl mx-auto">
            <h1 class="font-semibold text-4xl mb-16 text-center">Pemetaan Kota Lokasi KKN UNS 2022</h1>

            {{-- Content --}}
            <div class="flex w-full justify-between flex-wrap text-primary-textdark">
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>
                <div class="btn-container basis-[19%]">
                    <button class="bg-primary-cream mb-10 w-[200px] h-10 rounded-xl font-semibold text-xl ">SURAKARTA</button>
                </div>



            </div>
        </div>

    </div>

    <script>
        const scrollToLokasi = () => {
            const lokasi_kkn = document.getElementById('lokasi_kkn');
            lokasi_kkn.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    </script>
</x-app-layout>

