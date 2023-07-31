<?php

namespace App\Models;

use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beranda extends Model
{
    use HasFactory;
    public function produks()
    {
        return $this->belongsTo(Produk::class, 'produk_id','id');
    }
}
