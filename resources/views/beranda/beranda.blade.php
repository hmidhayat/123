@extends('my_layout.mainapp')
@section('title','UAS | Beranda')
@section('page_title','Beranda')
@section('page_name','Beranda')
@section('page_subname','beranda')
@section('app_name','PERPUSTAKAAN_APP')
@section('user_name','Haryuna Vita Dewi')
@section('konten')
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>0</h3>

            <p>Total Buku</p>
            </div>
            <div class="icon">
            <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>0</h3>

            <p>Total Anggota</p>
            </div>
            <div class="icon">
            <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>0</h3>

            <p>Total Peminjaman</p>
            </div>
            <div class="icon">
            <i class="fa fa-upload"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>0</h3>

            <p>Total Pengembalian</p>
            </div>
            <div class="icon">
            <i class="fa fa-download"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
</div>
@endsection