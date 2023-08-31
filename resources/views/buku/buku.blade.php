@extends('my_layout.mainapp')
@section('title','UAS')
@section('page_title','Buku')
@section('page_name','Buku')
@section('page_subname','buku')
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
                    Master Data Buku
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambah_buku') }}" class="btn btn-sm btn-primary">Tambah</a>
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">NO</th>
                      <th>KODE</th>
                      <th>JUDUL</th>
                      <th>PENULIS</th>
                      <th>PENERBIT</th>
                      <th>TAHUN TERBIT</th>
                      <th>STOCK</th>
                      <th style="width: 60px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse ($data as $buku)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $buku->kode_buku }}</td>
                      <td>{{ $buku->judul_buku }}</td>
                      <td>{{ $buku->penulis_buku }}</td>
                      <td>{{ $buku->penerbit_buku }}</td>
                      <td>{{ $buku->tahun_penerbit }}</td>
                      <td>{{ $buku->stock }}</td>
                      <td><a href="{{ route('edit_buku',$buku->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('delete_buku',$buku->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
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