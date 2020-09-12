<?php

namespace App\Http\Controllers;

use App\Produk;
use App\ProdukSubKategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->query('create') merupakan data dari kategori?create=
        $statusCreate = $request->query('create');
        //$request->query('update') merupakan data dari kategori?update=
        $statusUpdate = $request->query('update');

        $statusDelete = $request->query('delete');

        //isset itu fungsi untuk mengecek apakah variable [$statusCreate] kosong atau tidak
        if (!isset($statusCreate)) {
            $statusCreate = "none";
        }

        //isset itu fungsi untuk mengecek apakah variable [$statusUpdate] kosong atau tidak
        if (!isset($statusUpdate)) {
            $statusUpdate = "none";
        }

        if (!isset($statusDelete)) {
            $statusDelete = "none";
        }

        $produk = Produk::select('produk.*', 'produk_sub_kategori.nama_sub_kategori')
            ->leftJoin('produk_sub_kategori', 'produk.id_kategori', 'produk_sub_kategori.id')->get();
        $subkategori = ProdukSubKategori::get();
        return view('produk.index', ['produkSubKategori' => $subkategori, 'produk' => $produk, 'statusCreate' => $statusCreate, 'statusUpdate' => $statusUpdate, 'statusDelete' => $statusDelete]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaProduk' => 'required|unique:produk,nama_produk',
            'produkSubKategori' => 'required|exists:produk_sub_kategori,id',
            'deskripsi' => 'required',
            'metaProdukBaru' => 'required|max:155',
            'file.*' => 'required|mimes:jpeg,jpg,png|max:250'
        ],
            [
                'namaProduk.required' => 'Mohon isi nama produk terlebih dahulu.',
                'namaProduk.unique' => 'Nama kategori sudah terdaftar sebelumnya.',
                'produkSubKategori.required' => 'Mohon isi kategori terlebih dahulu.',
                'produkSubKategori.exists' => 'Kategori tidak terdaftar.',
                'deskripsi.required' => 'Mohon isi deskripsi terlebih dahulu.',
                'metaProdukBaru.required' => 'Mohon sertakan meta description',
                'metaProdukBaru.max' => 'Meta description maksimal 155 karakter.',
                'file.*.required' => 'Mohon sertakan gambar produk',
                'file.*.mimes' => 'Sertakan gambar dengan format PNG atau JPG',
                'file.*.max' => 'Ukuran per-gambar maksimal adalah 250KB',
            ]);

        $images = $request->file('file');
        $newImageName = str_replace(' ', '_', $request->namaProduk);
        $imageDirs = array();
        foreach ($images as $key => $image) {
            if ($image->isValid()) {
                $index = $key + 1;
                $extension = $image->extension();
                $newPath = \Storage::disk('public')->putFileAs('produk', $image, $newImageName . '_' . $index . '.' . $extension);
                array_push($imageDirs, ['path' => $newPath, 'alt' => $request->namaProduk . ' ' . $index, 'key' => $key]);
            }
        }

        $produk = new Produk();

        $produk->nama_produk = $request->namaProduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_kategori = $request->produkSubKategori;
        $produk->meta_description = $request->metaProdukBaru;
        $produk->lampiran = json_encode($imageDirs);

        $produk->prioritas = Produk::where('id_kategori', $request->produkSubKategori)->count() + 1;


        if (isset($request->youtube)) {
            $produk->youtube = $request->youtube;
        }

        if (isset($request->tokpedLink)) {
            $produk->link_tokopedia = $request->tokpedLink;
        }

        if (isset($request->blLink)) {
            $produk->link_bukalapak = $request->blLink;
        }

        if (isset($request->shopeeLink)) {
            $produk->link_shopee = $request->shopeeLink;
        }

        $berhasil = $produk->save();

        if ($berhasil) {
            return redirect(route('produk.index') . '?create=success');
        }
        //delete image if fail
        foreach ($imageDirs as $dir) {
            \Storage::disk('public')->delete($dir->path);
        }
        return redirect(route('produk.index') . '?create=fail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaProduk' => 'nullable|unique:produk,nama_produk',
            'produkSubKategori' => 'nullable|exists:produk_sub_kategori,id',
            'metaDeskripsi' => 'nullable|max:155',
            'prioritas' => 'nullable|numeric',
            'file.*' => 'nullable|mimes:jpeg,jpg,png|max:250'
        ],
            [
                'namaProduk.unique' => 'Nama kategori sudah terdaftar sebelumnya.',
                'prioritas.numeric' => 'Prioritas hanya menerima angka.',
                'produkSubKategori.exists' => 'Kategori tidak terdaftar.',
                'metaDeskripsi.max' => 'Meta description maksimal 155 karakter.',
                'file.*.mimes' => 'Sertakan gambar dengan format PNG atau JPG',
                'file.*.max' => 'Ukuran per-gambar maksimal adalah 250KB',
            ]);

        $produk = Produk::find($id);

        $images = $request->file('file');
        $imgs = json_decode($produk->lampiran);
        $unallocatedIds = array();

        //checking unused id for new image
        for ($x = 0; $x < 5; $x++) {
            $isReseved = false;
            foreach ($imgs as $img) {
                if ($img->key == $x) {
                    $isReseved = true;
                }
            }
            if (!$isReseved) {
                array_push($unallocatedIds, $x);
            }
        }

        $currentIndex = 0;
        if (isset($images)) {
            $namaImage = isset($request->namaProduk) ? $request->namaProduk : $produk->nama_produk;
            $newImageName = str_replace(' ', '_', $namaImage);
            foreach ($images as $key => $image) {
                if ($image->isValid() && $currentIndex < count($unallocatedIds)) {
                    $index = $key + 1;
                    $extension = $image->extension();
                    $newPath = \Storage::disk('public')->putFileAs('produk', $image, $newImageName . '_' . $unallocatedIds[$currentIndex] . '.' . $extension);
                    array_push($imgs, ['path' => $newPath, 'alt' => $namaImage . ' ' . $index, 'key' => $unallocatedIds[$currentIndex]]);
                    $currentIndex++;
                }
            }
        }
        $produk->lampiran = json_encode($imgs);

        if (isset($request->namaProduk))
            $produk->nama_produk = $request->namaProduk;
        if (isset($request->deskripsi))
            $produk->deskripsi = $request->deskripsi;
        if (isset($request->metaDeskripsi))
            $produk->meta_description = $request->metaDeskripsi;
        if (isset($request->produkSubKategori))
            $produk->id_kategori = $request->produkSubKategori;


        if (isset($request->prioritas)) {
            $idKategori = isset($request->produkSubKategori) ? $request->produkSubKategori : $produk->id_kategori;
            $existingDataWithSamePriority = Produk::where('id_kategori', $idKategori)->where('prioritas', $request->prioritas)->first();
            if (isset($existingDataWithSamePriority)) {
                try {
                    \DB::beginTransaction();
                    $existingDataWithSamePriority->prioritas = $produk->prioritas;
                    $existingDataWithSamePriority->save();
                    $produk->prioritas = $request->prioritas;
                    $produk->save();
                    \DB::commit();
                    return redirect(route('produk.index') . '?update=success');
                } catch (Exception $e) {
                    \DB::rollBack();
                    return redirect(route('produk.index') . '?update=fail');
                }
            } else {
                $produk->prioritas = $request->prioritas;
            }
        }


        $berhasil = $produk->save();

        if ($berhasil) {
            return redirect(route('produk.index') . '?update=success');
        }
        return redirect(route('produk.index') . '?update=fail');
    }

    private function deleteImage($imageDir)
    {
        foreach ($imageDir as $dir) {
            \Storage::disk('public')->delete($dir->path);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $isDeleted = $produk->delete();

        if ($isDeleted) {
            return redirect(route('produk.index') . '?delete=success');
        }
        return redirect(route('produk.index') . '?delete=fail');
    }

    public function removeImage(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:produk,id',
            'imgKey' => 'required|numeric',
        ]);

        $produk = Produk::find($request->id);
        $imgs = json_decode($produk->lampiran);

        for ($x = 0; $x < count($imgs); $x++) {
            if ($imgs[$x]->key == $request->imgKey) {
                \Storage::disk('public')->delete($imgs[$x]->path);
                array_splice($imgs, $x, 1);
                $produk->lampiran = json_encode($imgs);
                $isSaved = $produk->save();
                if ($isSaved) {
                    return response()->json(['status' => 'success']);
                } else {
                    break;
                }
            }
        }
        return response()->json(['status' => 'fail']);
    }
}
