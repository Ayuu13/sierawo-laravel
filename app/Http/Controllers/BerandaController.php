<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('beranda',['galeri' => $galeri]);
    }
    public function show()
    {
        $galeri = Galeri::all();
        return view('produk',['galeri' => $galeri]);
    }
    public function showm()
    {
        $produk = Produk::with(['acaras'])->get();
        $galeri = Galeri::with(['produks'])->get();
        return view ('produk-makeup',(['produklist'=>$produk,'galeri'=>$galeri]));
    }
    public function showd()
    {
        $produk = Produk::with(['acaras'])->get();
        $galeri = Galeri::with(['produks'])->get();
        return view ('produk-dekorasi',(['produklist'=>$produk,'galeri'=>$galeri]));
    }
    public function showpe()
    {
        $produk = Produk::with(['acaras'])->get();
        $galeri = Galeri::with(['produks'])->get();
        return view ('produk-pelatihan',(['produklist'=>$produk,'galeri'=>$galeri]));
    }
    public function showpa()
    {
        $produk = Produk::with(['acaras'])->get();
        $galeri = Galeri::with(['produks'])->get();
        return view ('produk-paket',(['produklist'=>$produk,'galeri'=>$galeri]));
    }

}
