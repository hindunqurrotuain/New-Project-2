<?php

namespace App\Http\Controllers;
use app\Http\Models\pesanan;
use app\Http\Models\Produk;
//use DB;
use Illuminate\Support\Facades\DB;
//eloquent
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query builder
        $pesanan = DB::table('pesanan')
        ->join('produk','produk.produk_id','=','produk.id')
        ->select('pesanan.*','pesanan.nama as nama_produk')
        ->get();

        return view('admin.produk.pesanan', compact('pesanan'));
        //compact berfungsi mengumpulkan ada membuat array yang akan dipanggil didalam view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
