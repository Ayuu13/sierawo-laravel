<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggan = User::get();
        $pesanan = Pesanan::with(['users'])->get();
        return view('admin.pelanggan',['pelanggan'=>$pelanggan,'pesanan'=>$pesanan]);
    }
    public function show($id)
    {
        $pelanggan = User::find($id);
        $pesanan = Pesanan::with(['users','produks','acaras'])->get();
        return view('admin.pelanggan-detail',['pelanggan'=>$pelanggan,'pesanan'=>$pesanan]);
        // dd($pelanggan,$pesanan);
    }
}
