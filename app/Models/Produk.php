<?php

namespace App\Models;

use App\Models\Acara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'harga','keterangan'
    ];
    public function acaras()
    {
        return $this->belongsTo(Acara::class,'acara_id','id');
    }
    
}
