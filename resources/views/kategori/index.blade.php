@extends('adminlte::page')

@section('title', 'Kategori')

@section('plugins.Datatables', true)

@section('content_header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@else
  @if($statusCreate=="success")
  <div class="alert alert-success" role="alert">
    Kategori baru berhasil tersimpan.
  </div>
  @endif
  @if($statusCreate=="fail")
  <div class="alert alert-danger" role="alert">
    Kategori baru gagal disimpan.
  </div>
  @endif
  @if($statusUpdate=="success")
  <div class="alert alert-success" role="alert">
    Kategori berhasil diubah.
  </div>
  @endif
  @if($statusUpdate=="fail")
  <div class="alert alert-danger" role="alert">
    Kategori gagal diubah.
  </div>
  @endif
  @if($statusDelete=="success")
  <div class="alert alert-success" role="alert">
    Kategori berhasil dihapus.
  </div>
  @endif
  @if($statusDelete=="fail")
  <div class="alert alert-danger" role="alert">
    Kategori gagal dihapus.
  </div>
  @endif
@endif

    <h1>Kategori</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-backdrop="static" data-toggle="modal" data-target="#modalKategoriBaru">
  Tambah Kategori
</button>
<hr/>
@stop

@section('content')
<div class="bg-white border p-3 shadow">
<table id="tableKategori" class="display table" style="width:100%">
        <thead>
            <tr>
              <th style="width:15% !important">prioritas</th>
              <th>Detail kategori</th>
              <th style="width:25% !important">aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produkKategori as $key=>$kategori)
        <?php $img = json_decode($kategori->lampiran); ?>
            <tr>
              <td>{{$kategori->prioritas}}</td>
              <td>
                <div class="row p-2">
                  <div class="col-12">
                    <b>{{$kategori->nama_kategori}}</b>
                    <div class="row border rounded collapse mt-3 p-2" id="collapseKategori{{$key}}">
                      <div class="col-12">
                        <b>Deskripsi:</b>
                        <hr>
                        <div class="d-block">
                        {{ $kategori->meta_description }}
                        </div>
                      </div>
                      <div class="col-12 mt-2">
                      <b>Lampiran:</b>
                        <hr>
                        
                        <img src="{{\Storage::url($img[0]->path)}}" class="w-50" />
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
              <td>
              <button class="btn btn-info y mt-2" type="button" data-toggle="collapse" data-target="#collapseKategori{{$key}}" aria-expanded="false" aria-controls="collapseKategori{{$key}}">
                Detail
              </button>
              <button type="button" class="btn btn-primary mt-2 btn-warning" data-img="{{\Storage::url($img[0]->path)}}" data-id="{{$kategori->id}}" data-nama_kategori="{{$kategori->nama_kategori}}" data-backdrop="static" data-toggle="modal" data-target="#modalUbahKategori">Ubah</button>
              <button type="button" class="btn btn-primary mt-2 btn-danger" data-id="{{$kategori->id}}" data-nama_kategori="{{$kategori->nama_kategori}}" data-backdrop="static" data-toggle="modal" data-target="#modalHapusKategori">Hapus</button>
              </td>
            </tr>
        @endforeach
        </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="modalKategoriBaru" tabindex="-1" role="dialog" aria-labelledby="modalKategoriBaruLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content" action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKategoriBaruLabel">Kategori Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      @csrf
        <div class="form-group">
          <label for="namaKategori">Nama Kategori</label>
          <input type="text" class="form-control" name="namaKategori" id="namaKategori" aria-describedby="namaKategori" placeholder="masukan kategori">
        </div>
        <div class="form-group">
          <label for="metaKategoriBaru">Deskripsi <span class="badge badge-secondary">meta-tag</span> <span class="badge badge-secondary">slider</span></label>
          <small class="d-block">Maksimal 155 karakter.</small>
          <textarea maxlength="155" class="form-control" name="metaKategoriBaru" id="metaKategoriBaru" aria-describedby="metaKategoriBaru" placeholder="masukan deskripsi" required></textarea>
        </div>
        <div class="form-group" id="imageInputSkeleton">
          <label for="lampiran">Gambar produk</label>
          <small class="d-block">dimensi maksimal gambar 1920px x 1080px dengan ukuran maksimal 400KB, dianjurkan menggunakan gambar resolusi 16:9.</small>
        </div>
        

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </form>
  </div>
</div>

<!-- modal ubah kategori -->
<div class="modal fade" id="modalUbahKategori" tabindex="-1" role="dialog" aria-labelledby="modalUbahKategoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content"  id="formUbahKategori" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUbahKategoriLabel">Ubah kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="namaKategori">Nama Kategori</label>
          <input type="text" class="form-control" name="namaKategori" id="namaKategori" aria-describedby="namaKategori" placeholder="masukan kategori">
          
        </div>
        <div class="form-group">
          <label for="prioritas">prioritas</label>
          <input type="number" class="form-control" name="prioritas" id="prioritas" aria-describedby="prioritas" placeholder="Urutan prioritas">
          
        </div>

        <div class="form-group">
          <label for="metaKategori">Deskripsi <span class="badge badge-secondary">meta-tag</span> <span class="badge badge-secondary">slider</span></label>
          <small class="d-block">Maksimal 155 karakter.</small>
          <textarea maxlength="155" class="form-control" name="metaKategori" id="metaKategori" aria-describedby="metaKategori" placeholder="masukan deskripsi"></textarea>
        </div>

        <div class="form-group">
          <label for="prioritas">Lampiran saat ini</label>
          <img id="gambarSekarang" class="w-50 d-block" />
          <hr />
        </div>


        <div class="form-group" id="imageInputUpdateSkeleton">
          <label for="lampiran">Ubah gambar produk</label>
          <small class="d-block">dimensi maksimal gambar 1920px x 1080px dengan ukuran maksimal 400KB, dianjurkan menggunakan gambar resolusi 16:9.</small>
        </div>
        
        
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </form>
  </div>
</div>

<!-- modal hapus kategori -->
<div class="modal fade" id="modalHapusKategori" tabindex="-1" role="dialog" aria-labelledby="modalHapusKategoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusKategoriLabel">Yakin menghapus data?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <p id="labelHapusKategori"></p>

      </div>
      <div class="modal-footer">
      <form class="d-inline" id="formHapurKategori" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary btn-danger">Hapus</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </div>
  </div>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="/vendor/algoinc/imgPrev.js"></script>
    <script>
    $(document).ready( function () {
    $('#tableKategori').DataTable();
    $('#imageInputSkeleton').imgPrev({maxFile:1,maxSize:400000,imgWidth:1920,imgHeight:1080});
    $('#imageInputUpdateSkeleton').imgPrev({maxFile:1,maxSize:400000,imgWidth:1920,imgHeight:1080});
    } );

    $('#modalUbahKategori').on('show.bs.modal', function(e) {

      //ambil data yang dikirim dari button show modal
      var namaKategori = $(e.relatedTarget).data('nama_kategori');
      var kategoriId = $(e.relatedTarget).data('id');
      var imgSekarang = $(e.relatedTarget).data('img');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('input[name="namaKategori"]').attr('placeholder',namaKategori);
      $(e.currentTarget).find('#formUbahKategori').attr('action','kategori/'+kategoriId);
      $(e.currentTarget).find('#gambarSekarang').attr('src',imgSekarang);
    });

    $('#modalHapusKategori').on('show.bs.modal', function(e) {

      //ambil data yang dikirim dari button show modal
      var namaKategori = $(e.relatedTarget).data('nama_kategori');
      var kategoriId = $(e.relatedTarget).data('id');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('#labelHapusKategori').text('Yakin mau hapus kategori: '+namaKategori);
      $(e.currentTarget).find('#formHapurKategori').attr('action','kategori/'+kategoriId);
    });
    </script>
@stop