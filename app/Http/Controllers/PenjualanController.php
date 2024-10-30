<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $pelanggan = pelanggan::all();
        return view('home.penjualan.tambah' , compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      

        Penjualan::create([
           
          
            'tanggal_penjualan' =>$request->tanggal_penjualan,
            'total_harga' =>$request->total_harga,
           
            'id_pelanggan' =>$request->id_pelanggan,

        ]);
        return redirect('/penjualan')->with('success', 'penjualan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $pelanggan = Pelanggan::all($id);
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.edit', compact('penjualan', 'pelanggan'));
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
        $request->validate([
         
            'tanggal_penjualan' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'id_pelanggan' => 'required|numeric',
        

        ]);

       

        $penjualan = Penjualan::find($id);
       
           ([
           
            'tanggal_penjualan' =>  $request->tanggal_penjualan,
             'total_harga' =>  $request->total_harga,
            
             'kembalian' =>$request->kembalian
            
          ]);    
   
       
    
            

        
            
        return redirect('/penjualan')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = penjualan ::find($id);

      
        $penjualan->delete();
        return redirect('/penjualan')->with(['success' => 'Data Berhasil Dihapus!']); 
    }

} 