@section('title','Hapus Produk')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Produk, {{$galeri->nama}}!
      </h2>
  </x-slot>

  <x-slot name="slot">
    {{-- <div class="mt-5 flex justify-center"> --}}
        {{-- <div class="col-8"> --}}
        <form action="/admin/produk-destroy/{{$galeri->id}}" method="POST">
            @csrf
            @method('delete')
                <div class="flex justify-center mt-5">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 mt-5">
                      <div class="p-2 text-gray-1000 flex items-center justify-between">
                        Apakah yakin akan menghapus testimoni: {{$galeri->nama}}
                      </div>
                      <div class="p-2 text-gray-900 flex items-center justify-between">
                        Tanggal Acara: {{$galeri->tanggal_acara}}
                      </div>
                      <div class="p-2 text-gray-900 flex items-center justify-between">
                        <img src="{{ asset('storage/galeri/'.$galeri->gambar ) }}" alt="Foto Bukti" class="w-90 h-auto">
                      </div>
                      <div class="p-6 text-gray-900 flex items-center justify-between">
                        <a href="/admin/produk" class="text-indigo-600 hover:text-indigo-900">Kembali</a>
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-blue-600">
                          Hapus
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
        </form>
    {{-- </div></div> --}}
  </x-slot>
</x-app-layout>