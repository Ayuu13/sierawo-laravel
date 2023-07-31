@section('title','Edit Produk')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Produk, {{$ProdukList->nama}} acara {{$ProdukList->acaras->nama}}!
      </h2>
  </x-slot>

  <x-slot name="slot">
    <div class="mt-5 col-8 m-auto">
        <form action="/admin/produk-edit/{{$ProdukList->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-4">
                        <div class="p-6 text-gray-900 flex justify-between">
                            <div>
                                <label for="harga" class="font-bold">Harga : </label>
                                <x-text-input type="text" class="form-control" name="harga" id="harga" value="{{$ProdukList->harga}}" required></x-text-input>
                            </div>
                            <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                Perbarui
                            </button>
                        </div>
                      <div class="p-6 text-gray-900">
                        <label for="harga" class="font-bold">Keterangan : </label>
                        <x-text-input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$ProdukList->keterangan}}"></x-text-input>
                      </div>
                      <div class="p-6 text-gray-900 flex flex-wrap">
                        @foreach ($galeri as $item)
                            <div class="mr-4 mb-4">
                                <img src="{{ asset('storage/galeri/'.$item->gambar ) }}" alt="Foto Bukti" class="mx-auto w-80 h-auto">
                                <div class="text-center">{{$item->nama}} - {{$item->tanggal_acara}}</div>
                                <a href="/admin/produk-hapus/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Hapus</a>
                            </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                
        </form>
    </div>

  </x-slot>
</x-app-layout>