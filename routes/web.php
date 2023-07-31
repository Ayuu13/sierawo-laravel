<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AdminPesananController;
use App\Http\Controllers\AdminPelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/beranda');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Route::get('/produk', [BerandaController::class, 'show'])->name('produk');
Route::get('/produk-makeup', [BerandaController::class, 'showm']);
Route::get('/produk-dekorasi', [BerandaController::class, 'showd']);
Route::get('/produk-pelatihan', [BerandaController::class, 'showpe']);
Route::get('/produk-paket', [BerandaController::class, 'showpa']);
 
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pesan', [PesananController::class, 'create']);
    Route::post('/pesan', [PesananController::class, 'store']);

    Route::get('/admin/beranda', [AdminBerandaController::class, 'index'])->name('admin.beranda');

    Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');
    Route::get('/admin/produk-edit/{id}', [ProdukController::class, 'show']);
    Route::put('/admin/produk-edit/{id}', [ProdukController::class, 'update']);
    Route::get('/admin/produk-hapus/{id}', [ProdukController::class, 'delete']);
    Route::delete('/admin/produk-destroy/{id}', [ProdukController::class, 'destroy']);

    Route::get('/admin/galeri', [ProdukController::class, 'create'])->name('admin.galeri');
    Route::post('/admin/galeri', [ProdukController::class, 'store'])->name('admin.galeri');

    Route::get('/admin/pesanan', [AdminPesananController::class, 'index'])->name('admin.pesanan');
    Route::get('/admin/pesanan/{id}', [AdminPesananController::class, 'show']);
    Route::put('/admin/pesanan/{id}', [AdminPesananController::class, 'update']);
    Route::get('/admin/pesanan-edit/{id}', [AdminPesananController::class, 'edit']);
    Route::put('/admin/pesanan-edit/{id}', [AdminPesananController::class, 'updated']);

    Route::get('/admin/pelanggan', [AdminPelangganController::class, 'index'])->name('admin.pelanggan');
    Route::get('/admin/pelanggan-detail/{id}', [AdminPelangganController::class, 'show']);
});

require __DIR__.'/auth.php';
