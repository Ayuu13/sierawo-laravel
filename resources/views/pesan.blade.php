@section('title','Pesan Jadwal')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Pesan Jadwalmu Segera!') }}
      </h2>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 w-full md:w-full xl:w-2/4 px-4 mb-4">
        <form method="POST" action="/pesan" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="pelanggan_id" >Nama Lengkap</label>
                <input type="text" class="w-2/4 form-control" name="pelanggan_id" id="pelanggan_id" value="{{ Auth::user()->nama }}" readonly>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="produk_id">Jenis Produk & Acara</label>
                <select class="border rounded w-2/4 text-gray-700 leading-tight focus:shadow-outline" id="produk_id" name="produk_id">
                    @foreach ($produk as $item)
                        <option value="{{$item->id}}">{{$item->nama}} > {{$item->acaras->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="alamat_acara" >Lokasi Acara</label>
                <input type="text" class="w-2/4 form-control" name="alamat_acara" id="alamat_acara" required>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="tanggal_acara">Tanggal Acara</label>
                <input type="text" class="w-2/4 form-control" name="tanggal_acara" id="tanggal_acara" required>
            </div>
            <script>
                flatpickr("#tanggal_acara", {
                    dateFormat: "Y-m-d H:i", // Format tanggal yang diinginkan
                    enableTime: true, // Mengaktifkan waktu (jam)
                    locale: "id", // Atur bahasa menjadi bahasa Indonesia
                });
            </script>
            
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="detail_acara">Keterangan</label>
                <input type="text" class="w-2/4 form-control" name="detail_acara" id="detail_acara">
            </div>
            <div class="p-6 flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Pesan
                </button>
            </div>
        </form>
    </div>    
  </x-slot>
</x-app-layout>