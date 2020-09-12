@extends('adminlte::page')

@section('title', 'Sub-kategori')

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
    Sub-kategori baru berhasil tersimpan.
  </div>
  @endif
  @if($statusCreate=="fail")
  <div class="alert alert-danger" role="alert">
  Sub-kategori baru gagal disimpan.
  </div>
  @endif
  @if($statusUpdate=="success")
  <div class="alert alert-success" role="alert">
  Sub-kategori berhasil diubah.
  </div>
  @endif
  @if($statusUpdate=="fail")
  <div class="alert alert-danger" role="alert">
  Sub-kategori gagal diubah.
  </div>
  @endif
  @if($statusDelete=="success")
  <div class="alert alert-success" role="alert">
  Sub-kategori berhasil dihapus.
  </div>
  @endif
  @if($statusDelete=="fail")
  <div class="alert alert-danger" role="alert">
  Sub-kategori gagal dihapus.
  </div>
  @endif
@endif

    <h1>Sub-kategori</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-backdrop="static" data-toggle="modal" data-target="#modalSubKategoriBaru">
  Tambah sub-kategori
</button>
<hr/>
@stop

@section('content')
<div class="bg-white border p-3 shadow">
<table id="tableKategori" class="display table" style="width:100%">
        <thead>
            <tr>
            <th style="width:15% !important">prioritas</th>
            <th>Detail sub-kategori</th>
            <th style="width:25% !important">aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produkSubKategori as $key=>$subKategori)
        <?php $img = json_decode($subKategori->lampiran); ?>
            <tr>
              <td>{{$subKategori->prioritas}}</td>
              <td>
                <div class="row">
                  <div class="col-12">
                    {{$subKategori->nama_sub_kategori}} <span class="badge badge-secondary">{{$subKategori->nama_kategori}}</span>
                    <div class="row border rounded collapse mt-3 p-2" id="collapseSubKategori{{$key}}">
                      <div class="col-12">
                        <b>Deskripsi:</b>
                        <hr>
                        <div class="d-block">
                        {{ $subKategori->meta_description }}
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
              <button class="btn btn-info y mt-2" type="button" data-toggle="collapse" data-target="#collapseSubKategori{{$key}}" aria-expanded="false" aria-controls="collapseSubKategori{{$key}}">
                Detail
              </button>
              <button type="button" class="btn btn-primary mt-2 btn-warning" data-deskripsi="{{$subKategori->meta_description}}" data-img="{{\Storage::url($img[0]->path)}}" data-id="{{$subKategori->id}}" data-prioritas="{{$subKategori->prioritas}}" data-kategori="{{$subKategori->id_kategori}}" data-nama_sub_kategori="{{$subKategori->nama_sub_kategori}}" data-backdrop="static" data-toggle="modal" data-target="#modalUbahSubKategori">Ubah</button>
              <button type="button" class="btn btn-primary mt-2 btn-danger" data-id="{{$subKategori->id}}" data-nama_sub_kategori="{{$subKategori->nama_sub_kategori}}" data-backdrop="static" data-toggle="modal" data-target="#modalHapusSubKategori">Hapus</button>
              </td>
            </tr>
        @endforeach
        </tbody>
</table>
</div>



<!-- Modal -->
<div class="modal fade" id="modalSubKategoriBaru" tabindex="-1" role="dialog" aria-labelledby="modalSubKategoriBaruLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content"  action="{{route('subkategori.store')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSubKategoriBaruLabel">Sub-ategori Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @csrf
        <div class="form-group">
          <label for="subkategori">Nama sub-kategori</label>
          <input type="text" class="form-control" name="subkategori" id="subkategori" aria-describedby="subkategori" placeholder="masukan nama sub-kategori">
          
        </div>
        <div class="form-group">
          <label for="kategori">Pilih induk kategori</label>
          <select class="form-control" id="kategori" name="kategori">
          @foreach($produkKategori as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="metaSubKategoriBaru">Deskripsi <span class="badge badge-secondary">meta-tag</span></label>
          <small class="d-block">Maksimal 155 karakter.</small>
          <textarea maxlength="155" class="form-control" name="metaSubKategoriBaru" id="metaSubKategoriBaru" aria-describedby="metaSubKategoriBaru" placeholder="masukan deskripsi" required></textarea>
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
<div class="modal fade" id="modalUbahSubKategori" tabindex="-1" role="dialog" aria-labelledby="modalUbahSubKategoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content" id="formUbahSubKategori" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUbahSubKategoriLabel">Ubah kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="subkategori">Nama sub-kategori</label>
          <input type="text" class="form-control" name="subkategori" id="subkategori" aria-describedby="subkategori" placeholder="masukan nama sub-kategori">
          
        </div>
        <div class="form-group">
          <label for="prioritas">Prioritas</label>
          <input type="text" class="form-control" name="prioritas" id="prioritas" aria-describedby="prioritas" placeholder="Sub-kategori prioritas">
          
        </div>
        <div class="form-group">
          <label for="kategori">Pilih induk kategori</label>
          <select class="form-control" id="kategori" name="kategori">
          @foreach($produkKategori as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="metaSubKategori">Deskripsi <span class="badge badge-secondary">meta-tag</span></label>
          <small class="d-block">Maksimal 155 karakter.</small>
          <textarea maxlength="155" class="form-control" name="metaSubKategori" id="metaSubKategori" aria-describedby="metaSubKategori" placeholder="masukan deskripsi"></textarea>
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
<div class="modal fade" id="modalHapusSubKategori" tabindex="-1" role="dialog" aria-labelledby="modalHapusSubKategoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusSubKategoriLabel">Yakin menghapus data?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <p id="labelHapusSubKategori"></p>
      <p id="labelHapusSubKategori"><small>Produk yang terlampir pada sub-kategori ini akan terhapus juga.</small></p>

      </div>
      <div class="modal-footer">
      <form class="d-inline" id="formHapusSubKategori" method="POST">
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

    $('#modalUbahSubKategori').on('show.bs.modal', function(e) {

      //ambil data yang dikirim dari button show modal
      var kategori = $(e.relatedTarget).data('kategori');
      var subkategori = $(e.relatedTarget).data('nama_sub_kategori');
      var prioritas = $(e.relatedTarget).data('prioritas');
      var imgSekarang = $(e.relatedTarget).data('img');
      var deskripsi = $(e.relatedTarget).data('deskripsi');
      var id = $(e.relatedTarget).data('id');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('input[name="subkategori"]').attr('placeholder',subkategori);
      $(e.currentTarget).find('select[name="kategori"]').val(kategori);
      $(e.currentTarget).find('input[name="prioritas"]').attr('placeholder',prioritas);
      $(e.currentTarget).find('#formUbahSubKategori').attr('action','subkategori/'+id);
      $(e.currentTarget).find('textarea[name="metaSubKategori"]').attr('placeholder',deskripsi);
      $(e.currentTarget).find('#gambarSekarang').attr('src',imgSekarang);
    });

    $('#modalHapusSubKategori').on('show.bs.modal', function(e) {

      //ambil data yang dikirim dari button show modal
      var subkategori = $(e.relatedTarget).data('nama_sub_kategori');
      var id = $(e.relatedTarget).data('id');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('#labelHapusSubKategori').text('Yakin mau hapus sub-kategori: '+subkategori);
      $(e.currentTarget).find('#formHapusSubKategori').attr('action','subkategori/'+id);
    });
    </script>
@stop