@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Anggota')
@section('page_name','Anggota')
@section('page_subname','tambah anggota')
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
                    Tambah Anggota
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('simpan_anggota') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Anggota">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Jurusan">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No. telpon</label>
                    <input name="tlp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No. telpon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Alamat">
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