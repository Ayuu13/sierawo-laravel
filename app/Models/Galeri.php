<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $fillable = [
        'produk_id','nama','keterangan','tanggal_acara','gambar'
    ];
    public function produks()
    {
        return $this->belongsTo(Produk::class, 'produk_id','id');
    }
    
}
