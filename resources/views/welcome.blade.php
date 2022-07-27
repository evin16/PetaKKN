<x-app-layout>



    {{-- Header --}}
    <x-slot name="header">
        {{-- Background --}}
        <img src="{{ asset('img/uns.png') }}" alt="uns-image" class="w-full absolute  bg-center mx-auto left-0 z-0 opacity-60 ">

        <div class="title pt-16">
            <h1 class="font-bold text-5xl w-1/3 leading-relaxed text-primary-textlight z-10 relative">
                Pemetaan Titik Lokasi KKN UNS 2022222222222222
            </h1>
        </div>

        <div class="subtitle pt-4">
            <h2 class="text-lg font-light w-[45%] leading-relaxed text-primary-textlight z-10 relative">
                KKN UNS dilaksanakan di berbagai lokasi, dengan menggunakan pemetaan titik lokasi, kita dapat mengetahui titik mana saja lokasi KKN UNS dilaksanakan.
            </h2>
        </div>

        <div class="pt-12 relative z-10">
            <button class="font-semibold text-primary-textlight bg-primary-red w-36 h-10 text-lg rounded-xl">
                Lokasi KKN
            </button>
        </div>

    </x-slot>


    {{-- Jumbotron --}}
    <div class="jumbotron text-primary-textlight bg-primary-blue">
        <h1>Pemetaan Titik Lokasi KKN UNS 2022</h1>
    </div>


</x-app-layout>
