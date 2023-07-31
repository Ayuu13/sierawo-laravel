<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $pesan = Pesanan::with(['users', 'produks', 'statuses', 'acaras'])
                ->where('pelanggan_id', $user->id)
                ->get();
            
            return view('pesanan', compact('user', 'pesan'));
        } else {
            return view('pesanan');
        }
    }
    public function create()
    {
        $produk = Produk::with(['acaras'])->get();
        // $user = Auth::user()->nama;
        return view('pesan',(['produk'=>$produk])); 
    }
    public function store(Request $request)
    {
        $pesanan = Pesanan::create([
            'pelanggan_id' => auth()->user()->id,
            'produk_id' => $request->produk_id,
            'alamat_acara' => $request->alamat_acara,
            'detail_acara' => $request->detail_acara,
            'tanggal_acara' => $request->tanggal_acara
        ]);
        return redirect('pesanan');
    }
}
