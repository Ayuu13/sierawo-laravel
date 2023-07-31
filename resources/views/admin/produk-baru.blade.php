@section('title','Produk Baru')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Produk Baru!') }}
      </h2>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 w-full md:w-full xl:w-2/4 px-4 mb-4">
        <form method="POST" action="/admin/produk-baru" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="nama">Produk</label>
                <select class="border rounded w-2/4 text-gray-700 leading-tight focus:shadow-outline" id="nama" name="nama">
                    @foreach ($ProdukList as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="acara_id">Acara</label>
                <select class="border rounded w-2/4 text-gray-700 leading-tight focus:shadow-outline" id="acara_id" name="acara_id">
                    @foreach ($acara as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="harga" >Harga</label>
                <input type="text" class="w-2/4 form-control" name="harga" id="harga" required>
            </div>
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="w-2/4 form-control" name="keterangan" id="keterangan">
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