@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Anggota')
@section('page_name','Anggota')
@section('page_subname','edit anggota')
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
                    Ubah Anggota
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('update_anggota') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input value="{{ $anggota->id }}" name="id_data" type="hidden">
                    <input value="{{ $anggota->kode_anggota }}" name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Anggota">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input value="{{ $anggota->nama_anggota }}" name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="{{ $anggota->jk_anggota }}" selected>{{ $str_jkelamin[$anggota->jk_anggota] }}</option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input value="{{ $anggota->jurusan_anggota }}" name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Jurusan">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No. telpon</label>
                    <input value="{{ $anggota->no_telp_anggota }}" name="tlp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No. telpon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input value="{{ $anggota->alamat_anggota }}" name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Alamat">
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