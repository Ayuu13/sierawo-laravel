@section('title','Pelanggan')
<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Data Pelanggan!') }}
        </h2>
    </div>
  </x-slot>

  <x-slot name="slot">
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
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Pesanan
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

                    @foreach ($pelanggan as $item)
                    @if ($item->peran === 'Pelanggan')
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                            {{ $counter }}
                        </td>
                        @php
                        $counter++; // Tambahkan 1 ke variabel counter setiap kali loop
                        @endphp
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $pesanan->where('pelanggan_id', $item->id)->count() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="/admin/pelanggan-detail/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Detail</a>
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
  </x-slot>
</x-app-layout>