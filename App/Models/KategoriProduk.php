<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    protected $fiilable = [
        'nama'
    ];
    public function produk(){
        return $this->hasMany(produk::class);
    }
}
