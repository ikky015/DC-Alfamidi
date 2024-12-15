@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Dashboard</h1>
        {{-- @dd(auth()->check()) --}}
    </div>
</div>
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 40vh;">
        <img src="{{ asset('templates/img/background.png') }}" alt="Logo DC Alfamidi Palu" class="img-fluid" style="max-width: 300px;">
    </div>

    <div class="text-center">
        <h2>Selamat datang di DC Alfamidi Palu</h2>
        <p>DC Alfamidi Palu adalah pusat distribusi terbesar untuk jaringan Alfamidi di wilayah Palu.</p>
        <p>Kami menyediakan berbagai produk kebutuhan sehari-hari dengan harga terjangkau, </p> 
        serta memastikan pengiriman yang cepat dan efisien ke seluruh toko cabang kami di area Palu.</p>
    </div>
@endsection

