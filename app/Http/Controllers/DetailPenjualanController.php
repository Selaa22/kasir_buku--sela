<?php

namespace App\Http\Controllers;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_penjualan = DetailPenjualan::all();
        return view('home.detail_penjualan.index', compact('detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = penjualan::all();
        $produk = produk::all();
        return view('home.detail_penjualan.tambah' , compact('produk', 'penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      

       DetailPenjualan::create([
         
        'tanggal_penjualan' =>$request->tanggal_penjualan,
        'total_harga' =>$request->total_harga,
       
        'id_pelanggan' =>$request->id_pelanggan,


        ]);
        return redirect('/detail_penjualan')->with('success', 'detail_penjualan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $penjualan = penjualan::all($id);
        $detail_penjualan = detail_penjualan::find($id);
        return view('home.detail_penjualan.edit', compact('detail_penjualan', 'pelanggan'));
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
        // $request->validate([
           
        //     'tanggal_detail_penjualan' => 'required|numeric',
        //     'total_harga' => 'required|numeric',
        //     'id_pelanggan' => 'required|numeric',

        // ]);

       

        // $detail_penjualan = detail_penjualan::find($id);
       
        //    ([
        //     'tanggal_detail_penjualan' =>  $request->tanggal_detail_penjualan,
        //      'total_harga' =>  $request->total_harga,
        //      'id_pelanggan' =>  $request->id_pelanggan
            
        //   ]);    
   
       
    
            

        
            
        // return redirect('/detail_penjualan')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail_penjualan = detail_penjualan ::find($id);

      
        $detail_penjualan->delete();
        return redirect('/detail_penjualan')->with(['success' => 'Data Berhasil Dihapus!']); 
    }

} 