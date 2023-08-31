@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Buku')
@section('page_name','Buku')
@section('page_subname','tambah buku')
@section('app_name','PERPUSTAKAAN_APP')
@section('user_name','Haryuna Vita Dewi')
@section('konten')
<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users"></i>
                    Tambah Buku
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('simpan_buku') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Buku</label>
                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Anggota">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Judul Buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Penulis Buku</label>
                    <input name="penulis" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Penulis Buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit Buku</label>
                    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Penerbit Buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Terbit</label>
                    <input name="thn_terbit" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tahun Terbit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input name="stock" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Stock">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>
@endsection