@section ('title','Beranda')

<x-app-layout>
    <x-slot name="slot">
        <div class="flex justify-center bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                <div class="relative flex justify-center">
                    <div id="slideshow">
                        @foreach ($galeri as $item)
                            <img src="{{ asset('/storage/galeri/'.$item->gambar ) }}" width="1000px" style="height: 700px;" class="slide">
                        @endforeach
                    </div>
                    <div class="absolute inset-0 flex flex-col justify-center items-center">
                        <div class="text-5xl font-bold text-white mb-2">Selamat Datang di Siera!</div>
                        <div class="text-3xl text-center text-white mb-6">Salam Kenal Hangats</div>
                        <a href="#tentang-kami" class="px-6 py-2 bg-[#F3CD07] text-white text-lg uppercase tracking-wide rounded hover:bg-yellow-300 hover:text-white">Tentang Kami</a>
                    </div>
                </div>
            </div>
            
            <script>
                var slideIndex = 0;
                showSlides();
            
                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("slide");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) { slideIndex = 1 }
                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 5000); // Ganti gambar setiap 2 detik
                }
            </script>
        </div>

        <div class="py-8 bg-[#F3CD07] overflow-hidden shadow-sm">
            <div class="flex justify-center">
                <div id="tentang-kami" class="flex flex-col justify-center items-center">
                    <div class="text-3xl font-bold text-black mb-2">Kenapa Pilih Kami?</div>
                    <div class="text-center text-black mb-6 max-w-2xl">Terima kasih telah mempertimbangkan kami.<br>Kami percaya bahwa pengalaman, keterampilan, dan dedikasi dapat membedakan kami dan menjadikan kami pilihan ideal</div>
                </div>
            </div>
            <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-6">
                    <div class="p-1 bg-black shadow sm:rounded-lg">
                        {{-- <x-sertifikat></x-sertifikat> --}}
                        <div class="py-4">
                            <a class="flex justify-center font-semibold text-white">Sertifikat Kompetensi</a>
                            <p class="flex justify-center text-white">Tata rias pengantin pada tahun 2019.</p>
                        </div>
                    </div>
                    <div class="p-1 bg-black shadow sm:rounded-lg">
                        <div class="py-4">
                            <a class="flex justify-center font-semibold text-white">Fokus</a>
                            <p class="flex justify-center text-white">Mengutamakan kepuasan dan kualitas pelayanan terbaik kepada pelanggan.</p>
                        </div>
                    </div>
                    <div class="p-1 bg-black shadow sm:rounded-lg">
                        <div class="py-4">
                            <a class="flex justify-center font-semibold text-white">Harga</a>
                            <p class="flex justify-center text-white">Memiliki harga yang terjangkau.</p>
                        </div>
                    </div>
                    <div class="p-1 bg-black shadow sm:rounded-lg">
                        <div class="py-4">
                            <a class="flex justify-center font-semibold text-white">Bebas Pesan</a>
                            <p class="flex justify-center text-white">Bisa pesan jadwal kapanpun & dimanapun.</p>
                        </div>
                    </div>
                </div></div>
            
        </div>


        <footer class="bg-white footer py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="flex justify-between space-x-4">
                    <div class="justify-end text-xs">
                        Jln. Siliwangi Gg. Pangrango no. D14<br>Kelurahan Sawah Gede, Cianjur, Jawa Barat
                    </div>
                    <div class="flex justify-center space-x-4">
                        <a href="https://www.instagram.com/sieramakeup" target="_blank" rel="noopener noreferrer">
                            <x-instagram></x-instagram>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=089622417722" target="_blank" rel="noopener noreferrer">
                            <x-whatsapp></x-whatsapp>
                        </a>
                    </div>
                    <div class="justify-start text-sm">
                        &copy; Ayu Andini 2023
                    </div>
                </div>
                
            </div>
        </footer>
        
    </x-slot>
</x-app-layout>
