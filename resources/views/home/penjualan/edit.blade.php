@extends('layouts.master')
@section('title', 'penjualan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data penjualan</h3>
                            <a class="btn btn-warning "href="/penjualan">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="/penjualan/{{ $penjualan->id}}/update" method="post">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal Penjualan</label>
                                        <input 
                                        type="date"
                                        class="form-control"
                                        name="tanggal_penjualan"
                                        value="{{ $penjualan->tanggal_penjualan}}"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        <small id="helpid" class="form-text form-muted">help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Total Harga</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="total_harga"
                                        id=""
                                        value="{{ $penjualan->total_harga}}"
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        <small id="helpid" class="form-text form-muted">help text</small>
                                    </div>
                                    <div class="card-body">
                                      
                                            @csrf 
                                            <div class="mb-3">
                                        <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                                      <select name="id_pelanggan" id="">
                                        <option value="">Pilih Pelanggan</option>
                                        @foreach($pelanggan as $pelanggan)
                                        <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                        @endforeach

                                      </select> 
                                       
                                        
                                      
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update</button>

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection