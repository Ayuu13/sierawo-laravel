@section('title','Produk')
<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Detail Pelanggan, {{$pelanggan->nama}}!
        </h2>
    </div>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 w-full md:w-full xl:w-2/4 px-4 mb-4">
        <div class="bg-white shadow-md rounded px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <h2 class="font-bold text-black-900">Nama:</h2>
            <a>{{$pelanggan->nama}}</a>
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <h2 class="font-bold text-black-900">Email:</h2>
            <a>{{$pelanggan->email}}</a>
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <h2 class="font-bold text-black-900">Umur:</h2>
            <a>{{$pelanggan->umur}}</a>
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <h2 class="font-bold text-black-900">Alamat:</h2>
            @if ($pelanggan->alamat)
                <a>{{ $pelanggan->alamat }}</a>
            @else
                <a>-</a>
            @endif
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <h2 class="font-bold text-black-900">Pesanan:</h2>
            <a class="text-right">
                @foreach ($pesanan as $item)
                    {{ $item->produks->nama }} {{ $item->acaras->nama }} <br>
                @endforeach
            </a>
        </div>
        <div class="px-8 pt-4 pb-4 mb-2 flex items-center justify-between">
            <a href="/admin/pelanggan"
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </button>
            </a>
        </div>
    </div>
    
  </x-slot>
</x-app-layout>