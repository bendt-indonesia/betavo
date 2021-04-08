<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategori;
use App\Models\ProdukSubKategori;
use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function showIndex()
    {
        $produkKategori = ProdukKategori::get();
        $produkSubKategori = ProdukSubKategori::get();
        $featuredProduct = Produk::where('is_featured',1)->where('is_active',1)->get();
        return view('home', [
            "produkSubKategori" => $produkSubKategori,
            "produkKategori" => $produkKategori,
            'page' => \CMSPage::get('home'),
            'about' => \CMSPage::get('about'),
            'contact' => \CMSPage::get('contact'),
            'featured' => $featuredProduct,
        ]);
    }

    public function showCategory(Request $request, $category_slug = null, $sub_category_slug = null)
    {
        $produkKategori = ProdukKategori::with('produk_sub_kategori.produk')
            ->where('slug', $category_slug)
            ->where('is_active',1)
            ->orderBy('prioritas')
            ->first();

        if(!$produkKategori || $category_slug === null) abort(404);

        $ids = [];
        $produkSubKategori = null;
        foreach ($produkKategori->produk_sub_kategori as $sub) {
            if($sub_category_slug && $sub->is_active && $sub->slug === $sub_category_slug) {
                $ids[] = $sub->id;
                $produkSubKategori = $sub;
                break;
            } else if(!$sub_category_slug && $sub->is_active) {
                $ids[] = $sub->id;
            }
        }

        $listProduk = Produk::whereIn('id_kategori', $ids)->where('is_active',1)->orderBy('prioritas')->paginate(12);

        return view('category', [
            "produkKategori" => $produkKategori,
            "produkSubKategori" => $produkSubKategori,
            'listProduk' => $listProduk,
            'contact' => \CMSPage::get('contact'),
        ]);
    }

    public function showProductDetail(Request $request, $slug)
    {
        $produk = Produk::with('produk_sub_kategori.produk_kategori')->where('slug',$slug)->first();

        if(!$produk) abort(404);

        $produkSerupa = Produk::where('id_kategori', $produk->id_kategori)
            ->where('id', '!=', $produk->id)
            ->inRandomOrder()
            ->limit(4)->get();

        return view('product', [
            'produk' => $produk,
            'produkSerupa' => $produkSerupa,
            'contact' => \CMSPage::get('contact'),
        ]);
    }

//    public function showProductDetailOld(Request $request)
//    {
//        $namaProdukTerpilih = $request->query('nama');
//        if (!isset($namaProdukTerpilih)) {
//            return redirect('/');
//        }
//        $produkKategori = ProdukKategori::get();
//        $produkSubKategori = ProdukSubKategori::get();
//        $produkTerpilih = Produk::select('produk.*', 'produk_sub_kategori.nama_sub_kategori', 'produk_kategori.nama_kategori')
//            ->leftJoin('produk_sub_kategori', 'produk.id_kategori', 'produk_sub_kategori.id')
//            ->leftJoin('produk_kategori', 'produk_sub_kategori.id_kategori', 'produk_kategori.id')
//            ->whereRaw('produk.id = 12')
//            ->first();
//
//        //produk serupa di random
//        //$produkSerupa = Produk::where('id_kategori',$produkTerpilih->id_kategori)->where('id','!=',$produkTerpilih->id)->take(4)->get();
//        $produkSerupa = Produk::where('id_kategori', $produkTerpilih->id_kategori)->where('id', '!=', $produkTerpilih->id)->inRandomOrder()->limit(4)->get();
//        return view('compro.detail', [
//            "produkSerupa" => $produkSerupa,
//            "produkTerpilih" => $produkTerpilih,
//            "produkSubKategori" => $produkSubKategori,
//            "produkKategori" => $produkKategori,
//            'informasi' => []]);
//    }

    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        if(!$keyword) return redirect('/');

        $hasilPencarianProduk = Produk::whereRaw('nama_produk like ?', ['%' . $keyword . '%'])
            ->orWhereRaw('deskripsi like ?', ['%' . $keyword . '%'])->paginate(12);

        return view('search', [
            'listProduk' => $hasilPencarianProduk->appends([
                'keyword' => $keyword
            ]),
            'keyword' => $keyword,
        ]);
    }
}
