<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Store;

use App\Models\ProdukSubKategori as Model;
use App\Data\ProdukSubKategori\RequestStoreProdukSubKategori;
use App\Data\ProdukSubKategori\RequestUpdateProdukSubKategori;


class ProdukSubKategoriController extends Controller
{


    const PREFIX = 'backend.ProdukSubKategori';

    /**
     * Display a listing of the resource ProdukSubKategori
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
			'id_kategori' => \App\Models\ProdukKategori::all(),

        ]);
    }

    /**
     * Store a newly created ProdukSubKategori resource in storage.
     *
     * @param \App\Data\ProdukSubKategori\RequestStoreProdukSubKategori $request
     * @throws null
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreProdukSubKategori $request)
    {
        try {

            $model = new Model($request->validated());
            $model->process($request->allFiles(),'create');
            Store::forget('category');
            $request->session()->flash('success', 'New record (ProdukSubKategori) has been added!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_sub_kategori.index');
        }
    }

    /**
     * Display the specified resource ProdukSubKategori.
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
            return redirect()->route('backend.produk_sub_kategori.index');
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
				'id_kategori' => \App\Models\ProdukKategori::all(),

            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_sub_kategori.index');
        }
    }

    /**
     * Update the specified ProdukSubKategori resource in storage.
     *
     * @param  \App\Data\ProdukSubKategori\RequestUpdateProdukSubKategori $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateProdukSubKategori $request, $id)
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
            return redirect()->route('backend.produk_sub_kategori.index');
        }
    }

    /**
     * Remove the specified ProdukSubKategori resource from storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $find = Produk::where('id_kategori',$id)->first();
            if($find) {
                $request->session()->flash('danger', 'Kateogri ini sedang digunakan dan tidak dapat dihapus');
                return redirect()->route('backend.produk_sub_kategori.index');
            }
            $model = Model::findOrFail($id);
            $model->remove();
            Store::forget('category');
            $request->session()->flash('success', 'Record removed!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk_sub_kategori.index');
        }
    }
}
