@extends('layouts.master')
@section('title', 'detail_penjualan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Lengkapi Data Penjualan</h3>
                            <a class="btn btn-primary" href="/detail_penjualan/tambah">Tambah</a>
                      

                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                            <table class=" table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal Penjualan</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($detail_penjualan as $detail_penjualan)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                        <td>{{ $penjualan->tanggal_penjualan }}</td>
                                        <td>Rp. {{ number_format($penjualan->total_harga) }}</td>
                                        <td>{{$penjualan->pelanggan-> nama_pelanggan}}</td>
                                      
                                        <td>
                                             <a class="btn btn-primary" href="/detail_penjualan">Lengkapi Transaksi</a>
                                             
                                            </td> 
                                           
                                           </tr>                               
                                    @endforeach
                                </tbody>
                                </tbody>
                                
                            </table>
                          
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection