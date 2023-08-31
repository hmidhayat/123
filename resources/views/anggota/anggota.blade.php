@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Anggota')
@section('page_name','Anggota')
@section('page_subname','anggota')
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
                    Master Data Anggota
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambah_anggota') }}" class="btn btn-sm btn-primary">Tambah</a>
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">NO</th>
                      <th>KODE</th>
                      <th>NAMA</th>
                      <th>JENIS KELAMIN</th>
                      <th>JURUSAN</th>
                      <th>NO. TELPON</th>
                      <th>ALAMAT</th>
                      <th style="width: 60px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse ($data as $anggota)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $anggota->kode_anggota}}</td>
                      <td>{{ $anggota->nama_anggota}}</td>
                      <td>{{ $str_jkelamin[$anggota->jk_anggota] }}</td>
                      <td>{{ $anggota->jurusan_anggota}}</td>
                      <td>{{ $anggota->no_telp_anggota}}</td>
                      <td>{{ $anggota->alamat_anggota}}</td>
                      <td><a href="{{ route('edit_anggota',$anggota->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('delete_anggota',$anggota->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" class="text-center">No data</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>
@endsection