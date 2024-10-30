<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk' => 'required|min:5',
            'harga' => 'required|numeric',
            'barcode' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products/', $image->hashName());

        Produk::create([
            'gambar' => $image->hashName(),
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'barcode' => $request->barcode,
            'stok' => $request->stok,
        ]);

        return redirect('/produk')->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('home.produk.edit', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ini kosong, silakan diisi jika diperlukan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk' => 'required|min:5',
            'harga' => 'required|numeric',
            'barcode' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $produk = Produk::find($id);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/products', $image->hashName());

            // Hapus gambar lama
            Storage::delete('public/products/' . $produk->gambar);

            $produk->update([
                'gambar' => $image->hashName(),
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'barcode' => $request->barcode,
                'stok' => $request->stok,
            ]);
        } else {
            $produk->update([
                'gambar' => $image->hashName(),
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'barcode' => $request->barcode,
                'stok' => $request->stok,
            ]);
        }

        return redirect('/produk')->with('success', 'Produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        Storage::delete('public/products/' . $produk->gambar); // Hapus gambar
        $produk->delete();
        return redirect('/produk')->with('success', 'Produk Berhasil Dihapus');
    }
}
