@section('title','Produk')

<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Data Produk!') }}
        </h2>
        {{-- <a href="/admin/produk-baru" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
          Produk Baru
        </a> --}}
    </div>
  </x-slot>

  <x-slot name="slot">
    <div class="py-6 flex flex-wrap">
      <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="px-4">
            <div class="p-6 text-gray-900 flex items-center justify-between">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Galeri
              </h2>
              <a href="/admin/galeri" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Tambah
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  {{-- data make up --}}
  <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                  <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        #
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Make Up
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Harga
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Galeri
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Aksi
                  </th>
                  </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @php
                    $counter = 1; // Variabel untuk menyimpan nomor iterasi
                @endphp

                  @foreach ($ProdukList as $item)
                  @if ($item->nama === 'Make Up')
                  <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                          {{ $counter }}
                      </td>
                      @php
                        $counter++; // Tambahkan 1 ke variabel counter setiap kali loop
                      @endphp
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $item->acaras->nama }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $item->harga }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $galeri->where('produk_id', $item->id)->count() }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          <a href="/admin/produk-edit/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Sunting</a>
                      </td>
                  </tr>
                  @endif
                  @endforeach
              </tbody>
              </table>
          </div>
          </div>
        </div>
  </div>

  {{-- data dekorasi --}}
  <div class="py-10 flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      #
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Dekorasi
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Galeri
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php
                    $counter = 1; // Variabel untuk menyimpan nomor iterasi
                @endphp

                @foreach ($ProdukList as $item)
                @if ($item->nama === 'Dekorasi')
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                        {{ $counter }}
                    </td>
                    @php
                        $counter++; // Tambahkan 1 ke variabel counter setiap kali loop
                    @endphp
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->acaras->nama }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $item->harga }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $galeri->where('produk_id', $item->id)->count() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="/admin/produk-edit/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Sunting</a>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>

  {{-- data campur --}}
  <div class="mb-10 flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Produk Lain
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Galeri
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aksi
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $counter = 1; // Variabel untuk menyimpan nomor iterasi
                    @endphp

                    @foreach ($ProdukList as $item)
                    @if ($item->nama !== 'Make Up' && $item->nama !== 'Dekorasi')
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $counter }}
                        </td>
                        @php
                            $counter++; // Tambahkan 1 ke variabel counter setiap kali loop
                        @endphp
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->nama }} {{ $item->acaras->nama }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->harga }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $galeri->where('produk_id', $item->id)->count() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="/admin/produk-edit/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Sunting</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                </table>
            </div></div>
        </div>
    </div>

  </x-slot>
</x-app-layout>