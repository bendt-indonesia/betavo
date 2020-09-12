<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Produk as Model;
use App\Data\Produk\RequestStoreProduk;
use App\Data\Produk\RequestUpdateProduk;


class ProdukController extends Controller
{
    

    const PREFIX = 'backend.Produk';

    /**
     * Display a listing of the resource Produk
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
			'id_kategori' => \App\Models\ProdukSubKategori::all(),

        ]);
    }

    /**
     * Store a newly created Produk resource in storage.
     *
     * @param \App\Data\Produk\RequestStoreProduk $request
     * @throws null
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreProduk $request)
    {
        try {

            $model = new Model($request->validated());
            $model->process($request->allFiles(),'create');

            $request->session()->flash('success', 'New record (Produk) has been added!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk.index');
        }
    }

    /**
     * Display the specified resource Produk.
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
            return redirect()->route('backend.produk.index');
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
				'id_kategori' => \App\Models\ProdukSubKategori::all(),

            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk.index');
        }
    }

    /**
     * Update the specified Produk resource in storage.
     *
     * @param  \App\Data\Produk\RequestUpdateProduk $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateProduk $request, $id)
    {
        try {

            $model = Model::find($id);
            $model->fill($request->validated());
            $model->process($request->allFiles());

            $request->session()->flash('success', 'Record Updated!');

            return redirect()->route(self::PREFIX);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk.index');
        }
    }

    /**
     * Remove the specified Produk resource from storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $model = Model::findOrFail($id);
            $model->remove();

            $request->session()->flash('success', 'Record removed!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.produk.index');
        }
    }
}
