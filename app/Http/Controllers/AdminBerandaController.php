<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminBerandaController extends Controller
{
    public function index()
    {
        $pesan = Pesanan::with(['statuses'])->get();

        $totalMenungguKonfirmasi = $pesan->where('statuses.id', '1')->count();
        $persentaseMenungguKonfirmasi = ($totalMenungguKonfirmasi / $pesan->count()) * 100;
        $hasilMenungguKonfirmasi = number_format($persentaseMenungguKonfirmasi, 2);

        $totalKonfirmasiPembayaran = $pesan->where('statuses.id', '2')->count();
        $persentaseKonfirmasiPembayaran = ($totalKonfirmasiPembayaran / $pesan->count()) * 100;
        $hasilKonfirmasiPembayaran = number_format($persentaseKonfirmasiPembayaran, 2);

        $totalMenujuAcara = $pesan->where('statuses.id', '3')->count();
        $persentaseMenujuAcara = ($totalMenujuAcara / $pesan->count()) * 100;
        $hasilMenujuAcara = number_format($persentaseMenujuAcara, 2);

        $totalSelesai = $pesan->where('statuses.id', '4')->count();
        $persentaseSelesai = ($totalSelesai / $pesan->count()) * 100;
        $hasilSelesai = number_format($persentaseSelesai, 2);

        $totalBatal = $pesan->where('statuses.id', '5')->count();
        $persentaseBatal = ($totalBatal / $pesan->count()) * 100;
        $hasilBatal = number_format($persentaseBatal, 2);

        $pemasukan = Pesanan::select('harga_total', DB::raw('SUM(harga_total) as total'))
            ->groupBy('harga_total')
            ->get();

        $pelanggan = User::get();

        return view('admin.beranda',([
            'PesanList'=>$pesan,
            'MK'=>$hasilMenungguKonfirmasi,
            'KP'=>$hasilKonfirmasiPembayaran,
            'MA'=>$hasilMenujuAcara,
            'Selesai'=>$hasilSelesai,
            'Batal'=>$hasilBatal,
            'pemasukan'=>$pemasukan,
            'pelanggan'=>$pelanggan
        ]));
    }
}
