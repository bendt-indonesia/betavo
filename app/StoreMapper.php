<?php

namespace App;

use App\User;
use App\Models\ProdukKategori;

class StoreMapper
{
    public static function MAP($key)
    {
        switch ($key)
        {
            case 'users':
                return function() { return User::all(); };
            case 'category':
                return function() { return ProdukKategori::with(['produk_sub_kategori'])->where('is_active',1)->orderBy('prioritas')->get(); };
            default:
                return null;
        }
    }
}
