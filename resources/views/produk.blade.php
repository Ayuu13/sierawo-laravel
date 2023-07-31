@section ('title','Produk')

<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center font-semibold text-xl leading-tight">
            Jenis Produk yang Tersedia!
        </h2>
    </x-slot>
    
    <x-slot name="slot">
        <div class="py-6 bg-[#F3CD07] max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-6">
        
                {{-- MAKE UP --}}
                <div class="p-1 bg-black shadow sm:rounded-lg">
                    <div class="flex justify-center bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                        <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                            <div id="slideshow-makeup" class="w-120 h-80">
                                @foreach ($galeri as $key => $item)
                                    @if ($item->produks->nama === 'Make Up')
                                        <div>
                                            <img src="{{ asset('/storage/galeri/'.$item->gambar) }}" class="slide" style="{{ $key == 0 ? 'display:block;' : 'display:none;' }}">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <script>
                            function showSlides() {
                                const slides = document.querySelectorAll("#slideshow-makeup .slide");
                                let slideIndex = 0;

                                function changeSlide() {
                                    slides.forEach((slide) => {
                                        slide.style.display = "none";
                                    });
                                    slideIndex++;
                                    if (slideIndex >= slides.length) {
                                        slideIndex = 0;
                                    }
                                    slides[slideIndex].style.display = "block";
                                }

                                changeSlide(); // Tampilkan gambar pertama secara langsung
                                setInterval(changeSlide, 5000); // Ganti gambar setiap 5 detik
                            }

                            showSlides();
                        </script>
                        </div>
                    <div class="py-4 flex justify-center font-semibold">
                        <a href="/produk-makeup" class="text-white">Make Up</a>
                    </div>
                </div>

                {{-- DEKORASI --}}
                <div class="p-1 bg-black shadow sm:rounded-lg">
                    <div class="flex justify-center bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                        <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                            <div class="relative flex justify-center">
                                <div id="slideshow-dekorasi" class="w-120 h-80">
                                    @foreach ($galeri as $key => $item)
                                        @if ($item->produks->nama === 'Dekorasi')
                                        <img src="{{ asset('/storage/galeri/'.$item->gambar) }}" class="slide" style="{{ $key == 0 ? 'display:block;' : 'display:none;' }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <script>
                            function showSlides() {
                                const slides = document.querySelectorAll("#slideshow-dekorasi .slide");
                                let slideIndex = 0;

                                function changeSlide() {
                                    slides.forEach((slide) => {
                                        slide.style.display = "none";
                                    });
                                    slideIndex++;
                                    if (slideIndex >= slides.length) {
                                        slideIndex = 0;
                                    }
                                    slides[slideIndex].style.display = "block";
                                }

                                changeSlide(); // Tampilkan gambar pertama secara langsung
                                setInterval(changeSlide, 5000); // Ganti gambar setiap 5 detik
                            }

                            showSlides();
                        </script>
                    </div>                
                    <div class="py-4 flex justify-center font-semibold">
                        <a href="/produk-dekorasi" class="text-white">Dekorasi</a>
                    </div>
                </div>

                {{-- Pelatihan --}}
                <div class="p-1 bg-black shadow sm:rounded-lg">
                    <div class="flex justify-center bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                        <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                            <div class="relative flex justify-center">
                                <div id="slideshow-pelatihan" class="w-120 h-80">
                                    @foreach ($galeri as $key => $item)
                                        @if ($item->produks->nama === 'Pelatihan')
                                        <img src="{{ asset('/storage/galeri/'.$item->gambar) }}" class="slide" style="{{ $key == 0 ? 'display:block;' : 'display:none;' }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <script>
                            function showSlides() {
                                const slides = document.querySelectorAll("#slideshow-pelatihan .slide");
                                let slideIndex = 0;

                                function changeSlide() {
                                    slides.forEach((slide) => {
                                        slide.style.display = "none";
                                    });
                                    slideIndex++;
                                    if (slideIndex >= slides.length) {
                                        slideIndex = 0;
                                    }
                                    slides[slideIndex].style.display = "block";
                                }

                                changeSlide(); // Tampilkan gambar pertama secara langsung
                                setInterval(changeSlide, 5000); // Ganti gambar setiap 5 detik
                            }

                            showSlides();
                        </script>
                    </div>                
                    <div class="py-4 flex justify-center font-semibold">
                        <a href="/produk-pelatihan" class="text-white">Pelatihan</a>
                    </div>
                </div>

                {{-- Paket --}}
                <div class="p-1 bg-black shadow sm:rounded-lg">
                    <div class="flex justify-center bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                        <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                            <div class="relative flex justify-center">
                                <div id="slideshow-paket" class="w-120 h-80">
                                    @foreach ($galeri as $key => $item)
                                        @if ($item->produks->nama === 'Paket')
                                        <img src="{{ asset('/storage/galeri/'.$item->gambar) }}" class="slide" style="{{ $key == 0 ? 'display:block;' : 'display:none;' }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <script>
                            function showSlides() {
                                const slides = document.querySelectorAll("#slideshow-paket .slide");
                                let slideIndex = 0;

                                function changeSlide() {
                                    slides.forEach((slide) => {
                                        slide.style.display = "none";
                                    });
                                    slideIndex++;
                                    if (slideIndex >= slides.length) {
                                        slideIndex = 0;
                                    }
                                    slides[slideIndex].style.display = "block";
                                }

                                changeSlide(); // Tampilkan gambar pertama secara langsung
                                setInterval(changeSlide, 5000); // Ganti gambar setiap 5 detik
                            }

                            showSlides();
                        </script>
                    </div>                
                    <div class="py-4 flex justify-center font-semibold">
                        <a href="/produk-paket" class="text-white">Paket Pernikahan</a>
                    </div>
                </div>


        </div>
    </div>
    </x-slot>
</x-app-layout>