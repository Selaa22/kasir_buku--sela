<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\DetailPenjualan;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $totalPelanggan = Pelanggan::count();
        $totalPenjualan = Penjualan::count();
        $totalProduk = Produk::count();
        $historyPelanggan = Pelanggan::latest();
        $historyPenjualan=Penjualan::latest();
        $inputTerakhirPelanggan=Pelanggan::orderBy('created_at', 'desc')->first();
        $inputTerakhirPenjualan=Penjualan::orderBy('created_at', 'desc')->first();

        return view('home.dashboard', compact(
            'totalPelanggan', 
            // 'totalPenjualan ', 
            // 'totalProduk ' 
            
          ));
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
