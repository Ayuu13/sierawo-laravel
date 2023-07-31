<?php

namespace App\Models;

use App\Models\User;
use App\Models\Acara;
use App\Models\Produk;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_pesanan','pelanggan_id','produk_id','alamat_acara','detail_acara','tanggal_acara',
        'waktu_pemesanan','status_id',
        'harga_total', 'jenis_pembayaran','waktu_pembayaran'];
    protected $dates = [
        // Daftar kolom yang harus dianggap sebagai instance Carbon
        'waktu_pembayaran',
    ];
    public function statuses()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'pelanggan_id','id');
    }
    public function produks()
    {
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
    public function acaras()
    {
        return $this->hasOneThrough(Acara::class, Produk::class, 'id', 'id', 'produk_id', 'acara_id');
    }
}
