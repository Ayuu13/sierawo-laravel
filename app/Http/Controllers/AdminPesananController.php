<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Status;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPesananController extends Controller
{
    public function index()
    {
        $pesan = Pesanan::with(['statuses','users','produks','acaras'])->get();
        return view('admin.pesanan',['PesanList'=>$pesan]);
    }
    public function show($id)
    {
        $pesan = Pesanan::with(['statuses','users','produks','acaras'])->find($id);
        $status = Status::get();
        return view('admin.pesanan-detail',['PesanList'=>$pesan,'status'=>$status]);
    }
    public function update(Request $request,$id)
    {
        $pesan = Pesanan::find($id);
        $pesan->status_id = $request->status_id;
        $pesan->save();

        return redirect('admin/pesanan');
    }
    public function edit($id)
    {
        $pesan = Pesanan::with(['statuses'])->find($id);
        $status = Status::get();
        return view('admin.pesanan-edit',['PesanList'=>$pesan,'status'=>$status]);
    }
    public function updated(Request $request,$id)
    {
        $pesan = Pesanan::find($id);

        $pesan->harga_total = $request->harga_total;
        $pesan->jenis_pembayaran = $request->jenis_pembayaran;
        $pesan->waktu_pembayaran = Carbon::now();
        $pesan->save();

        return redirect('admin/pesanan');
    }
}
