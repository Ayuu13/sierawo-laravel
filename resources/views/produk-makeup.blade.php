@section ('title','Jenis Make Up')

<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center font-semibold text-xl leading-tight">
            Kategori Make Up
        </h2>
    </x-slot>

    <x-slot name="slot">
        @php
        $acaraIds = [1, 2, 3]; // Daftar acara_id yang ingin diambil
        @endphp
        
        @foreach ($acaraIds as $acaraId)
        
        @php
        $makeup = $produklist->where('nama', 'Make Up')->where('acara_id', $acaraId)->first();
        @endphp

        @if ($makeup)
        <div class="py-6 flex flex-wrap">
            <div class="py-6 max-w-7xl mx-auto sm:px-10 lg:px-20 space-y-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-6">
                    <div>
                        <div>
                            <a class="flex justify-end font-bold text-xl text-black">{{ $makeup->acaras->nama }}</a>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-end">
                            <x-primary-button>
                                <a href="/pesan">Pesan</a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    Harga dimulai dari {{ $makeup->harga }}
                </div>
                <div class="flex justify-center">
                    {{ $makeup->keterangan }}
                </div>
                
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($galeri as $item)
                            @if ($item->produks->nama === 'Make Up' && $item->produks->acara_id === $acaraId)
                            <div class="swiper-slide w-60">
                                <a class="group flex flex-col justify-center">
                                    <div class="w-full overflow-hidden rounded-lg bg-gray-500">
                                        <img src="{{ asset('/storage/galeri/'.$item->gambar ) }}" alt="{{$item->nama}}" class="h-auto w-full object-cover object-center">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700 text-center">{{ $item->nama }}</h3>
                                    <p class="mt-2 text-xs text-gray-500 text-center">{{ $item->tanggal_acara }}</p>
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <script>
                    var swiper = new Swiper('.swiper-container', {
                        slidesPerView: 'auto',
                        spaceBetween: 20,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        }
                    });
                </script>
                
                </div></div>
                @endif
        @endforeach 

    </x-slot>
</x-app-layout>