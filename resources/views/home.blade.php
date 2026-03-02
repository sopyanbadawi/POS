@extends('layouts.navbar')

@section('content')

<div class="text-center">
    <h1 class="mb-3">Welcome to POS System</h1>
    <p class="lead">Sistem Point of Sales untuk membantu transaksi penjualan</p>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Products</h5>
                <p>Lihat daftar kategori produk</p>
                <a href="/category/" class="btn btn-primary">Lihat Produk</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Sales</h5>
                <p>Kelola transaksi penjualan</p>
                <a href="/sales" class="btn btn-success">Mulai Transaksi</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>User Profile</h5>
                <p>Lihat profil pengguna</p>
                <a href="/user/1/name/Admin" class="btn btn-warning">Lihat Profil</a>
            </div>
        </div>
    </div>
</div>

@endsection