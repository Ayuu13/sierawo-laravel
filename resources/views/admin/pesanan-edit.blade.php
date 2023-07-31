@section('title','Edit Pesanan')

<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Pesanan, {{$PesanList->users->nama}}!
      </h2>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        {{ $PesanList->statuses->nama }}
      </button>
    </div>
  </x-slot>

  <x-slot name="slot">
    <div class="mt-5 col-8 m-auto">
        <form action="/admin/pesanan-edit/{{ $PesanList->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="w-full md:w-full xl:w-2/4 px-4 mb-4">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-4">
                      <div class="p-6 text-gray-900 flex items-center justify-between">
                        <label for="harga_total">Total Harga</label>
                        <x-text-input type="text" class="form-control" name="harga_total" id="harga_total" value="{{$PesanList->harga_total}}" required></x-text-input>
                      </div>
                      <div class="p-6 text-gray-900 flex items-center justify-between">
                        <label for="jenis_pembayaran">Jenis Pembayaran</label>
                        <x-text-input type="text" class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" value="{{$PesanList->jenis_pembayaran}}" required></x-text-input>
                      </div>
                      <div class="p-6 text-gray-900 flex items-center justify-between">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Perbarui
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </form>
    </div>

  </x-slot>
</x-app-layout>