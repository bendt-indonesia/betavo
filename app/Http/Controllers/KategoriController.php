<?php

namespace App\Http\Controllers;

use App\ProdukKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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

        $produkKategori = ProdukKategori::get();
        return view('kategori.index', ['produkKategori' => $produkKategori, 'statusCreate' => $statusCreate, 'statusUpdate' => $statusUpdate, 'statusDelete' => $statusDelete]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Kategori.insert');
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
            'namaKategori' => 'required|unique:produk_kategori,nama_kategori',
            'metaKategoriBaru' => 'required|max:155',
            'file.*' => 'required|mimes:jpeg,jpg,png|max:400'
        ],
            [
                'namaKategori.required' => 'Mohon isi nama kategori terlebih dahulu.',
                'namaKategori.unique' => 'Nama kategori sudah terdaftar sebelumnya.',
                'metaKategoriBaru.required' => 'Mohon sertakan meta description',
                'metaKategoriBaru.max' => 'Meta description maksimal 155 karakter.',
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
                $newPath = \Storage::disk('public')->putFileAs('kategori', $image, $newImageName . '_' . $index . '.' . $extension);
                array_push($imageDirs, ['path' => $newPath, 'alt' => $request->namaKategori . ' ' . $index, 'key' => $key]);
            }
        }

        $kategoriBaru = new ProdukKategori();

        $prioritas = ProdukKategori::count() + 1;

        $kategoriBaru->nama_kategori = $request->namaKategori;
        $kategoriBaru->meta_description = $request->metaKategoriBaru;
        $kategoriBaru->lampiran = json_encode($imageDirs);
        $kategoriBaru->prioritas = $prioritas;

        $berhasil = $kategoriBaru->save();

        if ($berhasil) {
            return redirect(route('kategori.index') . '?create=success');
        }
        //delete image if fail
        foreach ($imageDirs as $dir) {
            \Storage::disk('public')->delete($dir->path);
        }
        return redirect(route('kategori.index') . '?create=fail');
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
            'namaKategori' => 'nullable|unique:produk_kategori,nama_kategori',
            'prioritas' => 'nullable|numeric',
            'file.*' => 'nullable|mimes:jpeg,jpg,png|max:400',
            'metaKategori' => 'nullable|max:155',


        ],
            [
                'namaKategori.unique' => 'Nama kategori sudah terdaftar sebelumnya.',
                'prioritas.numeric' => 'Prioritas hanya menerima angka.',
                'file.*.mimes' => 'Sertakan gambar dengan format PNG atau JPG',
                'file.*.max' => 'Ukuran per-gambar maksimal adalah 400KB',
                'metaKategori.max' => 'Meta description maksimal 155 karakter.',
            ]);

        $kategori = ProdukKategori::find($id);

        $images = $request->file('file');
        if (isset($images)) {
            $namaImage = isset($request->namaKategori) ? $request->namaKategori : $kategori->nama_kategori;
            $newImageName = str_replace(' ', '_', $namaImage);
            foreach ($images as $key => $image) {
                if ($image->isValid()) {
                    $index = $key + 1;
                    $extension = $image->extension();
                    $newPath = \Storage::disk('public')->putFileAs('kategori', $image, $newImageName . '_' . $index . '.' . $extension);
                    array_push($imageDirs, ['path' => $newPath, 'alt' => $namaImage . ' ' . $index, 'key' => $key]);
                }
            }
        }

        if (count($imageDirs) > 0) {
            $oldImageDirs = json_decode($kategori->lampiran);
            $deleteAction = !($oldImageDirs[0]->path == $imageDirs[0]['path']);
            $kategori->lampiran = json_encode($imageDirs);
        }


        //ubah data yang tertera di column table database [nama_kategori] dengan value input dari user [namaKategori]
        if (isset($request->namaKategori))
            $kategori->nama_kategori = $request->namaKategori;

        if (isset($request->metaKategori))
            $kategori->meta_description = $request->metaKategori;

        if (isset($request->prioritas)) {
            $existingDataWithSamePriority = ProdukKategori::where('prioritas', $request->prioritas)->first();
            if (isset($existingDataWithSamePriority)) {
                try {
                    \DB::beginTransaction();
                    $existingDataWithSamePriority->prioritas = $kategori->prioritas;
                    $existingDataWithSamePriority->save();
                    $kategori->prioritas = $request->prioritas;
                    $kategori->save();
                    \DB::commit();
                    if ($deleteAction) {
                        $this->deleteImage($oldImageDirs);
                    }
                    return redirect(route('kategori.index') . '?update=success');
                } catch (Exception $e) {
                    \DB::rollBack();
                    if ($deleteAction) {
                        $this->deleteImage($imageDirs);
                    }
                    return redirect(route('kategori.index') . '?update=fail');
                }
            } else {
                $kategori->prioritas = $request->prioritas;
            }
        }

        //simpan data yang telah diperbaharui dengan function save()
        $berhasil = $kategori->save();

        //cek apakah data berhasil disimpan didatabase
        if ($berhasil) {
            if ($deleteAction) {
                $this->deleteImage($oldImageDirs);
            }
            return redirect(route('kategori.index') . '?update=success');
        }
        if ($deleteAction) {
            $this->deleteImage($imageDirs);
        }
        return redirect(route('kategori.index') . '?update=fail');

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
        $kategori = ProdukKategori::find($id);
        $lampiran = json_decode($kategori->lampiran);
        $isDeleted = $kategori->delete();

        $this->deleteImage($lampiran);

        if ($isDeleted) {
            return redirect(route('kategori.index') . '?delete=success');
        }
        return redirect(route('kategori.index') . '?delete=fail');

    }
}
