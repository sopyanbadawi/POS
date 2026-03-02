@extends('layouts.navbar')

@section('content')

<h2 class="mb-4">Halaman Transaksi POS</h2>

<div class="card shadow">
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" placeholder="Masukkan nama produk">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" placeholder="Masukkan jumlah">
            </div>

            <button type="submit" class="btn btn-success">Proses Transaksi</button>
        </form>
    </div>
</div>

@endsection