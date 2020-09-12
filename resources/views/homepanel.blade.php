@extends('adminlte::page')

@section('title', 'Home dashboard')

@section('plugins.Datatables', true)

@section('content_header')


    <h1>Dasbor</h1>
<hr/>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
        <a href="/admin/produk">
            <div class="card m-3">
                <ul class="list-group list-group-flush border border-info">
                    <li class="list-group-item text-info"><b>{{$totalProduk}}</b></li>
                    <li class="list-group-item bg-info py-1 px-2">Produk terdaftar</li>
                </ul>
            </div>
        </a>
        </div>
        <div class="col-4">
        <a href="/admin/kategori">
            <div class="card m-3">
                <ul class="list-group list-group-flush border border-info">
                    <li class="list-group-item text-info"><b>{{$totalKategori}}</b></li>
                    <li class="list-group-item bg-info py-1 px-2">Kategori terdaftar</li>
                </ul>
            </div>
        </a>
        </div>
        <div class="col-4">
        <a href="/admin/subkategori">
            <div class="card m-3">
                <ul class="list-group list-group-flush border border-info">
                    <li class="list-group-item text-info"><b>{{$totalSubKategori}}</b></li>
                    <li class="list-group-item bg-info py-1 px-2">Sub-kategori terdaftar</li>
                </ul>
            </div>
        </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">

        <a href="/admin/info">
            @if($totalInformasi==0)
            <div class="alert alert-dark" role="alert">
                <u><b>Anda belum melengkapi informasi usaha anda. klik di sini untuk melengkapinya sekarang.</b></u>
            </div>
            @else
            <div class="alert alert-info" role="alert">
                <u><b>klik di sini untuk merubah informasi usaha anda.</b></u>
            </div>
            @endif
        </a>

        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    </script>
@stop
