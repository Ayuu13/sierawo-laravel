@section('title','Detail Pesanan')
<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Pesanan, {{$PesanList->users->nama}}!
      </h2>
      <form action="/admin/pesanan/{{$PesanList->id}}" method="POST">
        @csrf
        @method('PUT')
        <select name="status_id" id="statuses" class="form-control" required>
          <option value="{{$PesanList->status_id}}">{{$PesanList->statuses->nama}}</option>
          @foreach ($status as $item)
              <option value="{{$item->id}}">{{$item->nama}}</option>
          @endforeach
        </select>
        <button type="submit" class="px-4 py-2 bg-white-500 text-black rounded hover:bg-blue-600">
          Status
        </button>
      </form>
    </div>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 flex flex-wrap max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-white divide-y divide-gray-200">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                        No Pesanan:
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">
                    {{ $PesanList->no_pesanan }}
                  </th>
                </tr>
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                        Waktu Pemesanan:
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">
                    {{ $PesanList->waktu_pemesanan }}
                  </th>
                </tr></thead></table></div></div></div></div>
    <div class="flex flex-wrap max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-white divide-y divide-gray-200">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                        Detail Pelanggan
                  </th>
                </tr></thead></table></div></div></div></div>
      <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-100">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->users->nama }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->users->email }}
                        </td>
                      </tr>
                  </tbody></table></div></div></div></div>

  <div class="py-6">
    <div class="flex flex-wrap max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-white divide-y divide-gray-200">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                        Detail Acara
                  </th>
                </tr></thead></table></div></div></div></div>
      <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Produk
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jenis
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Alamat
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Detail
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Acara
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->produks->nama }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->acaras->nama }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->alamat_acara }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->detail_cara }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->tanggal_acara }}
                        </td>
                      </tr>
                  </tbody></table></div></div></div></div>
  </div>
                
    <div class="flex flex-wrap max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-white divide-y divide-gray-200">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                        Detail Pembayaran
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a href="/admin/pesanan-edit/{{ $PesanList->id }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                      Edit
                    </a>
                  </th>
                </tr></thead></table></div></div></div></div>
      <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Total Harga
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jenis
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Waktu
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          Rp {{ number_format($PesanList->harga_total, 2, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->jenis_pembayaran }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $PesanList->waktu_pembayaran }}
                        </td>
                      </tr>
                  </tbody></table></div></div></div></div>
  </x-slot>
</x-app-layout>