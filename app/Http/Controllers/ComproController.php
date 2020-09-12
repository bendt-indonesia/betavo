<?php

namespace App\Http\Controllers;

use App\Informasi;
use App\Produk;
use App\ProdukKategori;
use App\ProdukSubKategori;
use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function showIndex()
    {
        $produkKategori = ProdukKategori::get();
        $produkSubKategori = ProdukSubKategori::get();
        $informasi = Informasi::first();
        return view('compro.index', ["produkSubKategori" => $produkSubKategori, "produkKategori" => $produkKategori, 'informasi' => $informasi]);
    }

    public function showCategory(Request $request)
    {
        //["produkSubKategori"=>$produkSubKategori,"produkKategori"=>$produkKategori,'informasi'=>$informasi]
        $namaKategori = $request->query('nama');
        $subKategori = $request->query('subkategori');
        if (!isset($namaKategori)) {
            return redirect('/');
        }
        $produkKategori = ProdukKategori::get();
        $produkSubKategori = ProdukSubKategori::get();
        $kategori = ProdukKategori::whereRaw('lower(nama_kategori) like ?', ['%' . $namaKategori . '%'])->first();
        $informasi = Informasi::first();

        $subKategoriTerpilih = null;
        $idSubKategoriTerpilih = array();

        if (isset($subKategori)) {
            for ($x = 0; $x < count($produkSubKategori); $x++) {
                if (strtolower($subKategori) == strtolower($produkSubKategori[$x]->nama_sub_kategori)) {
                    $subKategoriTerpilih = $produkSubKategori[$x];
                    break;
                }
            }
        } else {
            for ($x = 0; $x < count($produkSubKategori); $x++) {
                if ($kategori->id == $produkSubKategori[$x]->id_kategori) {
                    array_push($idSubKategoriTerpilih, $produkSubKategori[$x]->id);
                }
            }
        }

        $listProduk = Produk::where(function ($query) use ($subKategoriTerpilih, $idSubKategoriTerpilih) {
            if (isset($subKategoriTerpilih)) {
                $query->where('id_kategori', $subKategoriTerpilih->id);
            } else {
                $query->whereIn('id_kategori', $idSubKategoriTerpilih);
            }
        })->paginate(10);
        $customPath = '/kategori?nama=' . urlencode($namaKategori);
        $customPath .= isset($subKategori) ? '&subkategori=' . urlencode($subKategori) : '';
        $listProduk->withPath($customPath);
        return view('compro.category', ['subKategoriTerpilih' => $subKategoriTerpilih, 'listProduk' => $listProduk, 'kategoriTerpilih' => $kategori, "produkSubKategori" => $produkSubKategori, "produkKategori" => $produkKategori, 'informasi' => $informasi]);
    }

    public function showProductDetail(Request $request)
    {

        $namaProdukTerpilih = $request->query('nama');
        if (!isset($namaProdukTerpilih)) {
            return redirect('/');
        }

        $produkKategori = ProdukKategori::get();
        $produkSubKategori = ProdukSubKategori::get();
        $informasi = Informasi::first();
        $produkTerpilih = Produk::select('produk.*', 'produk_sub_kategori.nama_sub_kategori', 'produk_kategori.nama_kategori')
            ->leftJoin('produk_sub_kategori', 'produk.id_kategori', 'produk_sub_kategori.id')
            ->leftJoin('produk_kategori', 'produk_sub_kategori.id_kategori', 'produk_kategori.id')
            ->whereRaw('lower(produk.nama_produk) = ?', [strtolower($namaProdukTerpilih)])
            ->first();

        //produk serupa di random
        //$produkSerupa = Produk::where('id_kategori',$produkTerpilih->id_kategori)->where('id','!=',$produkTerpilih->id)->take(4)->get();
        $produkSerupa = Produk::where('id_kategori', $produkTerpilih->id_kategori)->where('id', '!=', $produkTerpilih->id)->inRandomOrder()->limit(4)->get();
        return view('compro.detail', ["produkSerupa" => $produkSerupa, "produkTerpilih" => $produkTerpilih, "produkSubKategori" => $produkSubKategori, "produkKategori" => $produkKategori, 'informasi' => $informasi]);
    }

    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        $totalPenemuan = 0;
        $informasi = Informasi::first();
        $produkKategori = ProdukKategori::get();
        $produkSubKategori = ProdukSubKategori::get();
        $hasilPencarianProduk = Produk::whereRaw('nama_produk like ?', ['%' . $keyword . '%'])->orWhereRaw('deskripsi like ?', ['%' . $keyword . '%'])->get();
        $hasilPencarianKategori = ProdukKategori::whereRaw('nama_kategori like ?', ['%' . $keyword . '%'])->get();
        $hasilPencarianSubKategori = ProdukSubKategori::select('produk_kategori.nama_kategori', 'produk_sub_kategori.*')->leftJoin('produk_kategori', 'produk_kategori.id', 'produk_sub_kategori.id_kategori')->where('produk_sub_kategori.nama_sub_kategori', 'like', '%' . $keyword . '%')->get();
        $totalPenemuan = count($hasilPencarianProduk) + count($hasilPencarianKategori) + count($hasilPencarianSubKategori);
        return view('compro.searchresult', ['totalTemuan' => $totalPenemuan, 'produkSubKategori' => $produkSubKategori, 'produkKategori' => $produkKategori, 'produk' => $hasilPencarianProduk, 'kategori' => $hasilPencarianKategori, 'subKategori' => $hasilPencarianSubKategori, 'informasi' => $informasi]);
    }
}
