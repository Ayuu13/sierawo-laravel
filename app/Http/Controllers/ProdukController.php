<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with(['acaras'])->get();
        $galeri = Galeri::with(['produks'])->get();
        return view('admin.produk',['ProdukList'=>$produk,'galeri'=>$galeri]);
        
    }
    public function show($id)
    {
        $produk = Produk::with(['acaras'])->find($id);
        $galeri = Galeri::with(['produks'])->where('produk_id', $id)->get();
        
        return view('admin.produk-edit',['ProdukList'=>$produk,'galeri'=>$galeri]);
        // dd($produk);
    }
    public function update(Request $request,$id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());

        return redirect('admin/produk');
    }
    public function create()
    {
        $produk = Produk::with(['acaras'])->get();
        return view('admin.galeri',['ProdukList'=>$produk]);
    }
    public function store(Request $request)
    {
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;

        $request->file('gambar')->storeAs('galeri',$newName);
        $galeri = Galeri::create([
            'produk_id' => $request->produk_id,
            'nama' => $request->nama,
            'tanggal_acara' => $request->tanggal_acara,
            'keterangan' => $request->keterangan,
            'gambar' => $newName,
        ]);
        return redirect('admin/produk');
    }
    public function delete($id)
    {
        $galeri = Galeri::find($id);
        return view('admin.produk-hapus',['galeri'=>$galeri]);
        // dd($bukti);
    }
    public function destroy($id)
    {
        // $deleteStudent = DB::table('students')->where('id',$id)->delete(); // --- query builder
        $deletedGaleri = Galeri::find($id);
        $deletedGaleri->delete();

        return redirect('admin/produk');
    }
}
