@extends('layouts.master')
@section('title', 'produk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data produk</h3>
                            <a class="btn btn-warning "href="/produk">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="/produk/simpan" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gambar</label>
                                        <input 
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        @error('gambar')
                                        <div class="allert allert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama produk</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        id=""
                                        value="{{old('nama_produk')}}"
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        @error('nama_produk')
                                        <div class="allert allert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Harga</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        value="{{old('harga')}}"
                                        
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        @error('harga')
                                        <div class="allert allert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">BarCode</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="barcode"
                                        id=""
                                        value="{{old('barcode')}}"
                                        
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        @error('harga')
                                        <div class="allert allert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Stok</label>
                                        <input 
                                        type="string"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        value="{{old('stok')}}"
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        @error('stok')
                                        <div class="allert allert-danger mt-2">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection