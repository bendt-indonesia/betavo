<?php

namespace App\Http\Controllers;

use App\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
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

        $informasi = Informasi::first();
        return view('informasi.index', ['informasi' => $informasi, 'statusCreate' => $statusCreate, 'statusUpdate' => $statusUpdate, 'statusDelete' => $statusDelete]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $totalInfo = Informasi::count();
        if ($totalInfo > 0) {
            return redirect(route('info.index') . '?create=fail');
        }
        $request->validate([
            'brand' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'shortDescription' => 'required|max:320',
            'longDescription' => 'required|max:400',
        ],
            [
                'brand.required' => 'Mohon isi nama brand terlebih dahulu.',
                'phone.required' => 'Mohon isi nomor kontak dahulu.',
                'email.required' => 'Mohon isi email dahulu.',
                'email.email' => 'Format email tidak sesuai.',
                'shortDescription.required' => 'Mohon isi deskripsi singkat dahulu.',
                'shortDescription.max' => 'Deskripsi singkat maksima 320 karakter.',
                'longDescription.required' => 'Mohon isi deskripsi lengkap dahulu.',
                'longDescription.max' => 'Deskripsi lengkap maksima 400 karakter.',
            ]);

        $informasi = new Informasi();

        $informasi->nama_brand = $request->brand;
        $informasi->nomor_telpon = $request->phone;
        $informasi->email = $request->email;
        $informasi->deskripsi_singkat = $request->shortDescription;
        $informasi->deskripsi_lengkap = $request->longDescription;
        $informasi->lokasi = $request->location;

        if (isset($request->tokpedLink)) {
            $informasi->link_tokopedia = $request->tokpedLink;
        }
        if (isset($request->blLink)) {
            $informasi->link_bukalapak = $request->blLink;
        }
        if (isset($request->blLink)) {
            $informasi->link_shopee = $request->shopeeLink;
        }
        if (isset($request->fbLink))
            $informasi->link_facebook = $request->fbLink;
        if (isset($request->igLink))
            $informasi->link_instagram = $request->igLink;

        $berhasil = $informasi->save();

        if ($berhasil) {
            return redirect(route('info.index') . '?create=success');
        }
        return redirect(route('info.index') . '?create=fail');


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
        $informasi = Informasi::first();
        $request->validate([
            'brand' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'shortDescription' => 'nullable|max:320',
            'longDescription' => 'nullable:max:400',
        ],
            [
                'email.email' => 'Format email tidak sesuai.',
                'shortDescription.max' => 'Deskripsi singkat maksimal 320 karakter.',
                'longDescription.max' => 'Deskripsi lengkap maksimal 400 karakter.',
            ]);
        $informasi = Informasi::find($id);

        if (isset($request->brand))
            $informasi->nama_brand = $request->brand;
        if (isset($request->phone))
            $informasi->nomor_telpon = $request->phone;
        if (isset($request->email))
            $informasi->email = $request->email;
        if (isset($request->shortDescription))
            $informasi->deskripsi_singkat = $request->shortDescription;
        if (isset($request->longDescription))
            $informasi->deskripsi_lengkap = $request->longDescription;
        if (isset($request->location))
            $informasi->lokasi = $request->location;
        if (isset($request->tokpedLink))
            $informasi->link_tokopedia = $request->tokpedLink;
        if (isset($request->blLink))
            $informasi->link_bukalapak = $request->blLink;
        if (isset($request->shopeeLink))
            $informasi->link_shopee = $request->shopeeLink;
        if (isset($request->fbLink))
            $informasi->link_facebook = $request->fbLink;
        if (isset($request->igLink))
            $informasi->link_instagram = $request->igLink;

        $berhasil = $informasi->save();

        if ($berhasil) {
            return redirect(route('info.index') . '?update=success');
        }
        return redirect(route('info.index') . '?update=fail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $isDeleted = $informasi->delete();

        if ($isDeleted) {
            return redirect(route('info.index') . '?delete=success');
        }
        return redirect(route('info.index') . '?delete=fail');
    }
}
