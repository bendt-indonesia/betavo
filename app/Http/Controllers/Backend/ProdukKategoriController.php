<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukSubKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ProdukKategori as Model;
use App\Data\ProdukKategori\RequestStoreProdukKategori;
use App\Data\ProdukKategori\RequestUpdateProdukKategori;

use App\Store;


class ProdukKategoriController extends Controller
{


    const PREFIX = 'backend.ProdukKategori';

    /**
     * Display a listing of the resource ProdukKategori
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $models = Model::
            select('*');

            return view(self::PREFIX.'.index',[
                'data' => $models->get()
            ]);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect('backend');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::PREFIX . '.create', [

        ]);
    }

    /**
     * Store a newly created ProdukKategori resource in storage.
     *
     * @param \App\Data\ProdukKategori\RequestStoreProdukKategori $request
     * @throws null
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreProdukKategori $request)
    {
        try {

            $model = new Model($request->validated());
            $model->process($request->allFiles(),'create');
            Store::forget('category');
            $request->session()->flash('success', 'New record (ProdukKategori) has been added!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_kategori.index');
        }
    }

    /**
     * Display the specified resource ProdukKategori.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id = NULL)
    {
        try {

            $model = Model::findOrFail($id);

            return view(self::PREFIX . '.show', [
                'model' => $model
            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_kategori.index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        try {

            $model = Model::findOrFail($id);

            return view(self::PREFIX . '.edit', [
                'model' => $model,

            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_kategori.index');
        }
    }

    /**
     * Update the specified ProdukKategori resource in storage.
     *
     * @param  \App\Data\ProdukKategori\RequestUpdateProdukKategori $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateProdukKategori $request, $id)
    {
        try {

            $model = Model::find($id);
            $model->fill($request->validated());
            $model->process($request->allFiles());
            Store::forget('category');
            $request->session()->flash('success', 'Record Updated!');

            return redirect()->route(self::PREFIX);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_kategori.index');
        }
    }

    /**
     * Remove the specified ProdukKategori resource from storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $find = ProdukSubKategori::where('id_kategori',$id)->first();
            if($find) {
                $request->session()->flash('danger', 'Ketegori ini memiliki sub kategori, mohon untuk melakukan update terhadap sub kategori terlebih dahulu.');
                return redirect()->route('backend.produk_kategori.index');
            }

            $model = Model::findOrFail($id);
            $model->remove();
            Store::forget('category');
            $request->session()->flash('success', 'Record removed!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_kategori.index');
        }
    }
}
