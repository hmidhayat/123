@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Buku')
@section('page_name','Edit Buku')
@section('page_subname','edit buku')
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
                    Ubah Buku
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('update_buku') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Buku</label>
                    <input value="{{ $buku->id }}" name="id_data" type="hidden">
                    <input value="{{ $buku->kode_buku }}" name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input value="{{ $buku->judul_buku }}" name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Judul Buku">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Penulis Buku</label>
                    <input value="{{ $buku->penulis_buku }}" name="penulis" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Penulis Buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit Buku</label>
                    <input value="{{ $buku->penerbit_buku }}" name="penerbit" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Penerbit Buku">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Terbit</label>
                    <input value="{{ $buku->tahun_penerbit }}" name="thn_terbit" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tahun Terbit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input value="{{ $buku->stock }}" name="stock" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Stock">
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