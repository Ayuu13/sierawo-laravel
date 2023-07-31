@section ('title','Pesanan')

<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="flex justify-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Belum Login!
        </h2>
    </x-slot> --}}
    
    <x-slot name="slot">
        @if (Auth::check())
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-center font-semibold p-6 text-white dark:text-gray-100">
                        {{ __("Detail Pesanan!") }}
                    </div>
                </div>
            </div>
        </div>
        
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
                            No Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Produk
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acara
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pembayaran
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $counter = 1; // Variabel untuk menyimpan nomor iterasi
                    @endphp

                        @foreach ($pesan as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                {{ $counter }}
                            </td>
                            @php
                            $counter++; // Tambahkan 1 ke variabel counter setiap kali loop
                            @endphp
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->no_pesanan }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->produks->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->acaras->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->statuses->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if ($item->harga_total)
                                    Rp {{ number_format($item->harga_total, 2, ',', '.') }}
                                @else
                                    <a href="https://api.whatsapp.com/send?phone=089622417722" class="text-indigo-600 hover:text-indigo-900">Whatsapp</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
            
        @else
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-center font-semibold p-6 text-white dark:text-gray-100">
                        {{ __("Kamu harus masuk akun terlebih dahulu!") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="/login">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Login
            </button>
            </a>
        </div>
        @endif
    </x-slot>
</x-app-layout>