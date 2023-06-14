<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    //panggil table produk
    protected $table = 'pesanan';
    protected $fiilable = [
        'id',
        'tanggal',
        'nama_pesanan',
        'alamat_pemesanan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];
    public function Produk(){
        return $this->belongsTo(Produk::class);
    }
}
