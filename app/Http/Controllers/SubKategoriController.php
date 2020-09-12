<?php

namespace App\Http\Controllers;

use App\ProdukKategori;
use App\ProdukSubKategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
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

        $subKategori = ProdukSubKategori::select('produk_sub_kategori.*', 'produk_kategori.nama_kategori')->leftJoin('produk_kategori', 'produk_sub_kategori.id_kategori', 'produk_kategori.id')->get();
        $kategori = ProdukKategori::get();
        return view('subkategori.index', ['produkSubKategori' => $subKategori, 'produkKategori' => $kategori, 'statusCreate' => $statusCreate, 'statusUpdate' => $statusUpdate, 'statusDelete' => $statusDelete]);
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
            'subkategori' => 'required|unique:produk_sub_kategori,nama_sub_kategori',
            'kategori' => 'required|exists:produk_kategori,id',
            'metaSubKategoriBaru' => 'required|max:155',
            'file.*' => 'required|mimes:jpeg,jpg,png|max:400'
        ],
            [
                'subkategori.required' => 'Mohon isi nama sub-kategori terlebih dahulu.',
                'subkategori.unique' => 'Nama sub-kategori sudah terdaftar sebelumnya.',
                'kateogir.required' => 'Mohon pilih induk kategori terlebih dahulu.',
                'subkategori.exists' => 'Kategori terpilih tidak terdaftar.',
                'metaSubKategoriBaru.required' => 'Mohon sertakan meta description',
                'metaSubKategoriBaru.max' => 'Meta description maksimal 155 karakter.',
                'file.*.required' => 'Mohon sertakan gambar produk',
                'file.*.mimes' => 'Sertakan gambar dengan format PNG atau JPG',
                'file.*.max' => 'Ukuran per-gambar maksimal adalah 400KB',
            ]);

        $images = $request->file('file');
        $newImageName = str_replace(' ', '_', $request->namaKategori);
        $imageDirs = array();
        foreach ($images as $key => $image) {
            if ($image->isValid()) {
                $index = $key + 1;
                $extension = $image->extension();
                $newPath = \Storage::disk('public')->putFileAs('subkategori', $image, $newImageName . '_' . $index . '.' . $extension);
                array_push($imageDirs, ['path' => $newPath, 'alt' => $request->namaKategori . ' ' . $index, 'key' => $key]);
            }
        }

        $subKategoriBaru = new ProdukSubKategori();

        $prioritas = ProdukSubKategori::where('id_kategori', $request->kategori)->count() + 1;

        $subKategoriBaru->nama_sub_kategori = $request->subkategori;
        $subKategoriBaru->id_kategori = $request->kategori;
        $subKategoriBaru->prioritas = $prioritas;
        $subKategoriBaru->meta_description = $request->metaSubKategoriBaru;
        $subKategoriBaru->lampiran = json_encode($imageDirs);

        $berhasil = $subKategoriBaru->save();

        if ($berhasil) {
            return redirect(route('subkategori.index') . '?create=success');
        }
        return redirect(route('subkategori.index') . '?create=fail');
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
        $deleteAction = false;
        $imageDirs = array();
        $oldImageDirs = array();

        $request->validate([
            'subkategori' => 'nullable|unique:produk_sub_kategori,nama_sub_kategori',
            'kategori' => 'nullable|exists:produk_kategori,id',
            'prioritas' => 'nullable|numeric',
            'metaSubKategori' => 'nullable|max:155',
            'file.*' => 'nullable|mimes:jpeg,jpg,png|max:400',
        ],
            [
                'subkategori.unique' => 'Nama kategori sudah terdaftar sebelumnya.',
                'kategori.exists' => 'Induk kategori tidak terdaftar.',
                'prioritas.numeric' => 'Prioritas hanya menerima angka.',
                'metaSubKategoriBaru.max' => 'Meta description maksimal 155 karakter.',
                'file.*.mimes' => 'Sertakan gambar dengan format PNG atau JPG',
                'file.*.max' => 'Ukuran per-gambar maksimal adalah 400KB',
            ]);

        $subkategori = ProdukSubKategori::find($id);

        $images = $request->file('file');
        if (isset($images)) {
            $namaImage = isset($request->subkategori) ? $request->subkategori : $subkategori->nama_sub_kategori;
            $newImageName = str_replace(' ', '_', $namaImage);
            foreach ($images as $key => $image) {
                if ($image->isValid()) {
                    $index = $key + 1;
                    $extension = $image->extension();
                    $newPath = \Storage::disk('public')->putFileAs('subkategori', $image, $newImageName . '_' . $index . '.' . $extension);
                    array_push($imageDirs, ['path' => $newPath, 'alt' => $namaImage . ' ' . $index, 'key' => $key]);
                }
            }
        }

        if (count($imageDirs) > 0) {
            $oldImageDirs = json_decode($subkategori->lampiran);
            $deleteAction = !($oldImageDirs[0]->path == $imageDirs[0]['path']);
            $subkategori->lampiran = json_encode($imageDirs);
        }

        if (isset($request->subkategori))
            $subkategori->nama_sub_kategori = $request->subkategori;
        if (isset($request->kategori))
            $subkategori->id_kategori = $request->kategori;
        if (isset($request->metaSubKategori))
            $subkategori->meta_description = $request->metaSubKategori;

        if (isset($request->prioritas)) {
            $existingDataWithSamePriority = ProdukSubKategori::where('prioritas', $request->prioritas)->where('id_kategori', $subkategori->id_kategori)->first();
            if (isset($existingDataWithSamePriority)) {
                try {
                    \DB::beginTransaction();
                    $existingDataWithSamePriority->prioritas = $subkategori->prioritas;
                    $existingDataWithSamePriority->save();
                    $subkategori->prioritas = $request->prioritas;
                    $subkategori->save();
                    \DB::commit();
                    if ($deleteAction) {
                        $this->deleteImage($oldImageDirs);
                    }
                    return redirect(route('subkategori.index') . '?update=success');
                } catch (Exception $e) {
                    \DB::rollBack();
                    if ($deleteAction) {
                        $this->deleteImage($imageDirs);
                    }
                    return redirect(route('subkategori.index') . '?update=fail');
                }
            }
            $subkategori->prioritas = $request->prioritas;
        }

        $berhasil = $subkategori->save();

        if ($berhasil) {
            if ($deleteAction) {
                $this->deleteImage($oldImageDirs);
            }
            return redirect(route('subkategori.index') . '?update=success');
        }
        if ($deleteAction) {
            $this->deleteImage($imageDirs);
        }
        return redirect(route('subkategori.index') . '?update=fail');

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
        $subkategori = ProdukSubKategori::find($id);
        $lampiran = json_decode($kategori->lampiran);
        $isDeleted = $subkategori->delete();

        if ($isDeleted) {
            $this->deleteImage($lampiran);
            return redirect(route('subkategori.index') . '?delete=success');
        }
        return redirect(route('subkategori.index') . '?delete=fail');
    }
}
