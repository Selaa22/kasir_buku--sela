@extends('layouts.master')
@section('title', 'pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data pelanggan</h3>
                            <a class="btn btn-warning "href="/pelanggan">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="/pelanggan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama pelanggan</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_pelanggan"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        <small id="helpid" class="form-text form-muted">help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Alamat</label>
                                        <input 
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        <small id="helpid" class="form-text form-muted">help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">nomor_tlp</label>
                                        <input 
                                        type="string"
                                        class="form-control"
                                        name="nomor_tlp"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                        />
                                        <small id="helpid" class="form-text form-muted">help text</small>
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