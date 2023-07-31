@section('title','Galeri')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Galeri Produk!') }}
      </h2>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 w-full md:w-full xl:w-2/4 px-4 mb-4">
        <form method="POST" action="/admin/galeri" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="produk_id">Produk</label>
                <select class="border rounded w-2/4 text-gray-700 leading-tight focus:shadow-outline" id="produk_id" name="produk_id">
                    @foreach ($ProdukList as $item)
                        <option value="{{$item->id}}">{{$item->nama}} > {{$item->acaras->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="nama">Nama Pelanggan</label>
                <x-text-input type="text" class="w-2/4 form-control" name="nama" id="nama" required></x-text-input>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="tanggal_acara">Tanggal Acara</label>
                <x-text-input type="text" class="w-2/4 form-control" name="tanggal_acara" id="tanggal_acara" required></x-text-input>
            </div>
            <script>
                flatpickr("#tanggal_acara", {
                    dateFormat: "Y-m-d H:i", // Format tanggal yang diinginkan
                    enableTime: true, // Mengaktifkan waktu (jam)
                    locale: "id", // Atur bahasa menjadi bahasa Indonesia
                });
            </script>
            
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="keterangan">Keterangan</label>
                <x-text-input type="text" class="w-2/4 form-control" name="keterangan" id="keterangan"></x-text-input>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="gambar">Gambar</label>
                <input class="border rounded w-2/4 text-gray-700 focus:shadow-outline" id="gambar" type="file" name="gambar" class="form-control" required> 
            </div>
            <div class="p-6 flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Tambah
                </button>
            </div>
        </form>
    </div>    
  </x-slot>
</x-app-layout>