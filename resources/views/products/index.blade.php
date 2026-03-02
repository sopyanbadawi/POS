@extends('layouts.navbar')

@section('content')

<h2 class="mb-4 text-center">Daftar Kategori Produk</h2>

<div class="row">

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h5>Food & Beverage</h5>
                <p>Makanan dan minuman</p>
                <a href="/category/food-beverage" class="btn btn-primary btn-sm">
                    Lihat Kategori
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h5>Beauty & Health</h5>
                <p>Produk kecantikan dan kesehatan</p>
                <a href="/category/beauty-health" class="btn btn-success btn-sm">
                    Lihat Kategori
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h5>Home Care</h5>
                <p>Peralatan dan kebutuhan rumah</p>
                <a href="/category/home-care" class="btn btn-warning btn-sm">
                    Lihat Kategori
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h5>Baby & Kid</h5>
                <p>Kebutuhan bayi dan anak</p>
                <a href="/category/baby-kid" class="btn btn-danger btn-sm">
                    Lihat Kategori
                </a>
            </div>
        </div>
    </div>

</div>

@endsection