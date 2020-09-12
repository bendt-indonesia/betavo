<?php

namespace App\Http\Controllers;

use App\Informasi;
use App\Produk;
use App\ProdukKategori;
use App\ProdukSubKategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProduk = Produk::count();
        $totalKategori = ProdukKategori::count();
        $totalSubKategori = ProdukSubKategori::count();
        $totalInformasi = Informasi::count();

        return view('homepanel', ['totalProduk' => $totalProduk, 'totalKategori' => $totalKategori, 'totalSubKategori' => $totalSubKategori, 'totalInformasi' => $totalInformasi]);
    }
}
