@section('title','Beranda')

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Selamat Datang Admin!') }}
      </h2>
  </x-slot>

  <x-slot name="slot">
  {{-- <div class="py-6 max-w-6xl mx-auto sm:px-6 lg:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
        <div class="bg-white rounded shadow p-6">
            <h2 class="text-lg font-bold mb-4">Grafik Pemesanan</h2>
            <canvas id="pemasukan" width="400" height="200"></canvas>
            <script>
                // Mendapatkan data pemesanan dari controller
                var pemasukan = {!! json_encode($pemasukan) !!};
            
                // Membuat array untuk label dan data
                var labels = [];
                var data = [];
            
                // Mengisi array label dan data dengan data pemesanan
                pemasukan.forEach(function(item) {
                    labels.push(item.status);
                    data.push(item.count);
                });
            
                // Membuat grafik menggunakan Chart.js
                var ctx = document.getElementById('pemasukan').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Jumlah Pemasukan',
                            data: data,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 5
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 100000, // Ubah stepSize sesuai kebutuhan Anda
                                    callback: function(value) {
                                        var formatter = new Intl.NumberFormat('id-ID', {
                                            style: 'currency',
                                            currency: 'IDR',
                                            minimumFractionDigits: 0,
                                            maximumFractionDigits: 0
                                        });
                                        return formatter.format(value);
                                    }
                                }
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</div> --}}

  <div class="py-5 flex flex-wrap max-w-6xl mx-auto sm:px-6 lg:px-6">
      <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-4">
        <div class="bg-white border-l-4 border-primary shadow h-full py-6">
            <div class="px-4">
                <div class="text-xs font-bold text-primary uppercase mb-1">
                    Total Pelanggan
                </div>
                <div class="text-2xl font-bold text-gray-800">
                    {{ $pelanggan->where('peran', 'Pelanggan')->count() }}
                </div>
            </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-4">
        <div class="bg-white border-l-4 border-primary shadow h-full py-6">
            <div class="px-4">
                <div class="text-xs font-bold text-primary uppercase mb-1">
                    Total Pemasukan
                </div>
                <div class="text-2xl font-bold text-gray-800">
                    @php
                        $totalHarga = $PesanList->sum(function($item) {
                            return is_numeric($item->harga_total) ? $item->harga_total : 0;
                        });
                    @endphp
                
                    Rp {{ number_format($totalHarga, 2, ',', '.') }}
                </div>
                
            </div>
        </div>
      </div>
  </div>

      <div class="py-2">
          <div class="max-w-6xl mx-auto sm:px-6 lg:px-6">
              <div class="bg-white border-l-4 border-primary shadow h-full p-6 card shadow mb-4">
                  <div class="card-header">
                      <h2 class="font-bold text-primary">Pesanan</h2>
                  </div>
                  <div class="card-body">
                      <h4 class="text-sm font-bold">Menunggu Konfirmasi<span class="float-right">{{$MK}}%</span></h4>
                      <div class="relative h-2 bg-gray-200 rounded-md mt-2">
                          <div class="absolute top-0 left-0 h-full bg-yellow-500 rounded-md" style="width:{{$MK}}%"></div>
                      </div>
                      <h4 class="text-sm font-bold">Konfirmasi Pembayaran<span class="float-right">{{$KP}}%</span></h4>
                      <div class="relative h-2 bg-gray-200 rounded-md mt-2">
                          <div class="absolute top-0 left-0 h-full bg-red-500 rounded-md" style="width:{{$KP}}%"></div>
                      </div>
                      <h4 class="text-sm font-bold">Menuju Acara<span class="float-right">{{$MA}}%</span></h4>
                      <div class="relative h-2 bg-gray-200 rounded-md mt-2">
                          <div class="absolute top-0 left-0 h-full bg-green-300 rounded-md" style="width:{{$MA}}%"></div>
                      </div>
                      <h4 class="text-sm font-bold">Selesai<span class="float-right">{{$Selesai}}%</span></h4>
                      <div class="relative h-2 bg-gray-200 rounded-md mt-2">
                          <div class="absolute top-0 left-0 h-full bg-blue-500 rounded-md" style="width:{{$Selesai}}%"></div>
                      </div>
                      <h4 class="text-sm font-bold">Batal<span class="float-right">{{$Batal}}%</span></h4>
                      <div class="relative h-2 bg-gray-200 rounded-md mt-2">
                          <div class="absolute top-0 left-0 h-full bg-gray-500 rounded-md" style="width:{{$Batal}}%"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </x-slot>
</x-app-layout>