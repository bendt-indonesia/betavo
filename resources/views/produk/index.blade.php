@extends('adminlte::page')

@section('title', 'Produk')

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
  @if($statusCreate=='success')
    <div class="alert alert-success" role="alert">
        Produk baru berhasil tersimpan.
    </div>
  @endif

  @if($statusCreate=="fail")
  <div class="alert alert-danger" role="alert">
    Produk baru gagal disimpan.
  </div>

  @endif
  @if($statusUpdate=="success")
  <div class="alert alert-success" role="alert">
    Produk berhasil diubah.
  </div>
  @endif
  @if($statusUpdate=="fail")
  <div class="alert alert-danger" role="alert">
    Produk gagal diubah.
  </div>
  @endif
  @if($statusDelete=="success")
  <div class="alert alert-success" role="alert">
    Produk berhasil dihapus.
  </div>
  @endif
  @if($statusDelete=="fail")
  <div class="alert alert-danger" role="alert">
    Produk gagal dihapus.
  </div>
  @endif
@endif

    <h1>Produk</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-backdrop="static" data-toggle="modal" data-target="#modalProdukBaru">
  Tambah Produk
</button>
<hr/>
@stop

@section('content')
<div class="bg-white border p-3 shadow">
<table id="tableProduk" class="display table" style="width:100%">
        <thead>
            <tr>
            <th style="width:15% !important">prioritas</th>
            <th>Detail produk</th>
            <th style="width:25% !important">aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produk as $key=>$item)
        <?php $img = json_decode($item->lampiran); ?>
            <tr>
              <td>{{$item->prioritas}}</td>
              <td>
              <div class="row">
                  <div class="col-12">
                    {{$item->nama_produk}} <span class="badge badge-secondary">{{$item->nama_sub_kategori}}</span>
                    <div class="row border rounded collapse mt-3 p-2" id="collapseProduk{{$key}}">
                      <div class="col-12">
                        <b>Deskripsi:</b>
                        <hr>
                        <div class="d-block">
                        {!! $item->deskripsi !!}
                        </div>
                      </div>
                      <div class="col-12">
                        <b>Deskripsi:<span class="badge badge-secondary">meta-tag</span></b>
                        <hr>
                        <div class="d-block">
                        {!! $item->meta_description !!}
                        </div>
                      </div>
                      <div class="col-12  mt-2">
                        <b>Link external:<span class="badge badge-secondary">online-shop</span></b>
                        <hr>
                        <div class="d-block mb-4">
                        @if(isset($item->link_tokopedia))
                        <a class="mx-1 text-white" href="{{$item->link_tokopedia}}"><img src="/img/tokped.png" alt="tokopedia - {{$item->nama_produk}}" style="height:42px;width:42px"></a>
                        @endif
                        @if(isset($item->link_bukalapak))
                        <a class="mx-1 text-white" href="{{$item->link_bukalapak}}"><img src="/img/bukalapak.png" alt="bukalapak - {{$item->nama_produk}}" style="height:42px;width:42px"></a>
                        @endif
                        @if(isset($item->link_shopee))
                        <a class="mx-1 text-white" href="{{$item->link_shopee}}"><img src="/img/shopee.png" alt="shopee - {{$item->nama_produk}}" style="height:42px;width:42px"></a>
                        @endif
                        </div>
                      </div>
                      @if($item->youtube)
                      <div class="col-12 mt-2">
                        <b>Youtube: <span class="badge badge-secondary">embed</span></b>
                        <hr>
                      </div>
                      <div class="col-12 mt-2">
                        {!! $item->youtube !!}
                      </div>
                      @endif
                      <div class="col-12 mt-2">
                        <b>Lampiran:</b>
                        <hr>
                      </div>
                      @foreach($img as $i)
                      <div class="col-3 mt-2">
                        <img src="{{\Storage::url($i->path)}}" class="w-100 img-thumbnail" />
                      </div>
                      @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>
              <button class="btn btn-info y mt-2" type="button" data-toggle="collapse" data-target="#collapseProduk{{$key}}" aria-expanded="false" aria-controls="collapseProduk{{$key}}">
                Detail
              </button>
              <button type="button" class="btn btn-primary mt-2 btn-warning" data-prioritas="{{$item->prioritas}}" data-images="{{$item->lampiran}}" data-shopee="{{$item->link_shopee}}" data-bukalapak="{{$item->link_bukalapak}}" data-tokopedia="{{$item->link_tokopedia}}" data-youtube="{{$item->youtube}}" data-kategori="{{$item->id_kategori}}" data-id="{{$item->id}}" data-nama_produk="{{$item->nama_produk}}" data-meta="{{$item->meta_description}}" data-deskripsi="{{$item->deskripsi}}" data-backdrop="static" data-toggle="modal" data-target="#modalUbahProduk">Ubah</button>
              <button type="button" class="btn btn-primary mt-2 btn-danger" data-id="{{$item->id}}" data-nama_produk="{{$item->nama_produk}}" data-backdrop="static" data-toggle="modal" data-target="#modalHapusProduk">Hapus</button>
              </td>
            </tr>
        @endforeach
        </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="modalProdukBaru" tabindex="-1" role="dialog" aria-labelledby="modalProdukBaruLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content" action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalProdukBaruLabel">Produk Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      @csrf
        <div class="form-group">
          <label for="namaProduk">Nama Produk</label>
          <input type="text" class="form-control" name="namaProduk" id="namaProdukBaru" aria-describedby="namaProduk" placeholder="masukan Produk" required>
        </div>
        <div class="form-group">
            <label for="produkKategori">Pilih kategori</label>
            <select class="form-control" id="produkKategori" name="produkSubKategori">
            @foreach($produkSubKategori as $subkategori)
            <option value="{{$subkategori->id}}">{{$subkategori->nama_sub_kategori}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="deskripsi">deskripsi produk</label>
          <div class="quilleditor" id="editorDeskripsiBaru">
          </div>
          <input type="hidden" name="deskripsi" id="inputDeskripsiBaru" />
        </div>
        <div class="form-group">
          <label for="metaProdukBaru">Deskripsi <span class="badge badge-secondary">meta-tag</span> <span class="badge badge-secondary">deskripsi singkat</span></label>
          <small class="d-block">Maksimal 155 karakter.</small>
          <textarea maxlength="155" class="form-control" name="metaProdukBaru" id="metaProdukBaru" aria-describedby="metaProdukBaru" placeholder="masukan meta deskripsi" required></textarea>
        </div>
        <div class="form-group">
          <label for="youtube">Youtube <span class="badge badge-secondary">Embed only</span></label>
          <small class="d-block">Youtube embed code</small>
          <textarea class="form-control" name="youtube" id="youtube" aria-describedby="youtube" placeholder="youtube"></textarea>
        </div>
        <div class="form-group" id="imageInputSkeleton">
          <label for="lampiran">Gambar produk</label>
          <small class="d-block">dimensi maksimal gambar 600px x 600px dengan ukuran maksimal 250KB, dianjurkan menggunakan gambar resolusi 1:1.</small>
        </div>
        <div class="form-group">
          <label for="tokpedLink">Link tokopedia</label>
          <input type="text" class="form-control" name="tokpedLink" id="tokpedLink" aria-describedby="tokpedLink" placeholder="masukan link tokopedia">
        </div>
        <div class="form-group">
          <label for="blLink">Link bukalapak</label>
          <input type="text" class="form-control" name="blLink" id="blLink" aria-describedby="blLink" placeholder="masukan link bukalapak">
        </div>
        <div class="form-group">
          <label for="shopeeLink">Link shopee</label>
          <input type="text" class="form-control" name="shopeeLink" id="shopeeLink" aria-describedby="shopeeLink" placeholder="masukan link shopee">
        </div>
      

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
    </form>
  </div>
</div>

<!-- modal ubah Produk -->
<div class="modal fade" id="modalUbahProduk" tabindex="-1" role="dialog" aria-labelledby="modalUbahProdukLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content" id="formUbahProduk" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUbahProdukLabel">Ubah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="namaProduk">Nama Produk</label>
          <input type="text" class="form-control" name="namaProduk" id="namaProdukBaru" aria-describedby="namaProduk" placeholder="masukan Produk">
        </div>
        <div class="form-group">
          <label for="prioritas">Prioritas</label>
          <input type="number" class="form-control" name="prioritas" id="prioritas" aria-describedby="prioritas">
        </div>
        <div class="form-group">
            <label for="produkKategori">Pilih kategori</label>
            <select class="form-control" id="produkKategori" name="produkSubKategori">
            @foreach($produkSubKategori as $subkategori)
            <option value="{{$subkategori->id}}">{{$subkategori->nama_sub_kategori}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="deskripsi">deskripsi produk</label>
          <div class="quilleditor" id="editorDeskripsiEdit">
          </div>
          <input type="hidden" name="deskripsi" id="inputDeskripsiEdit" />
        </div>
        <div class="form-group">
          <label for="metaDeskripsi">Deskripsi</label> <span class="badge badge-secondary">meta-tag</span>
          <textarea class="form-control" name="metaDeskripsi" id="metaDeskripsi" aria-describedby="metaDeskripsi"></textarea>
        </div>
        <div class="form-group">
          <label for="youtube">Youtube <span class="badge badge-secondary">Embed only</span></label>
          <small class="d-block">Youtube embed code</small>
          <textarea class="form-control" name="youtube" id="youtube" aria-describedby="youtube" placeholder="youtube"></textarea>
        </div>
        <div class="form-group" id="imageInputEditSkeleton">
          <label for="lampiran">Ganti gambar produk</label>
          <div class="row" id="existingImageFrame">
            
          </div>
          <small class="d-block">dimensi maksimal gambar 600px x 600px dengan ukuran maksimal 250KB, dianjurkan menggunakan gambar resolusi 1:1.</small>
        </div>
        <div class="form-group">
          <label for="tokpedLink">Link tokopedia</label>
          <input type="text" class="form-control" name="tokpedLink" id="tokpedLink" aria-describedby="tokpedLink" placeholder="masukan link tokopedia">
        </div>
        <div class="form-group">
          <label for="blLink">Link bukalapak</label>
          <input type="text" class="form-control" name="blLink" id="blLink" aria-describedby="blLink" placeholder="masukan link bukalapak">
        </div>
        <div class="form-group">
          <label for="shopeeLink">Link shopee</label>
          <input type="text" class="form-control" name="shopeeLink" id="shopeeLink" aria-describedby="shopeeLink" placeholder="masukan link shopee">
        </div>
        
      

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
      </div>
      </form>
  </div>
</div>

<!-- modal hapus Produk -->
<div class="modal fade" id="modalHapusProduk" tabindex="-1" role="dialog" aria-labelledby="modalHapusProdukLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusProdukLabel">Yakin menghapus data?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <p id="labelHapusProduk"></p>

      </div>
      <div class="modal-footer">
      <form class="d-inline" id="formHapurProduk" method="POST">
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
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('js')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="/vendor/algoinc/imgPrev.js"></script>
    <script>
    var quillProdukBaru = new Quill('#editorDeskripsiBaru', {
      theme: 'snow',
      placeholder: 'Masukan deskripsi produk',
    });
    var requireRefreshOnCloseModal=false;
    var quillProdukEdit = new Quill('#editorDeskripsiEdit', { theme: 'snow'});
    var imgUpdatePlugin = null;
    $(document).ready( function () {
      $('#tableProduk').DataTable();

      quillProdukBaru.on('text-change', function(delta, oldDelta, source) {
        $('#inputDeskripsiBaru').val(quillProdukBaru.root.innerHTML);
      });
      quillProdukEdit.on('text-change', function(delta, oldDelta, source) {
        $('#inputDeskripsiEdit').val(quillProdukEdit.root.innerHTML);
      });
      imgUpdatePlugin = $('#imageInputEditSkeleton').imgPrev();
      $('#imageInputSkeleton').imgPrev();
    });

    

    $('#modalUbahProduk').on('show.bs.modal', function(e) {
      imgUpdatePlugin.flush();
      //ambil data yang dikirim dari button show modal
      var namaProduk = $(e.relatedTarget).data('nama_produk');
      var kategori = $(e.relatedTarget).data('kategori');
      var deskripsi = $(e.relatedTarget).data('deskripsi');
      var ProdukId = $(e.relatedTarget).data('id');
      var meta = $(e.relatedTarget).data('meta');
      var youtube = $(e.relatedTarget).data('youtube');
      var tokopedia = $(e.relatedTarget).data('tokopedia');
      var bukalapak = $(e.relatedTarget).data('bukalapak');
      var shopee = $(e.relatedTarget).data('shopee');
      var prioritas = $(e.relatedTarget).data('prioritas');
      var lampiranTerpasang = $(e.relatedTarget).data('images');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('input[name="namaProduk"]').attr('placeholder',namaProduk);
      $(e.currentTarget).find('input[name="tokpedLink"]').attr('placeholder',tokopedia);
      $(e.currentTarget).find('input[name="blLink"]').attr('placeholder',bukalapak);
      $(e.currentTarget).find('input[name="prioritas"]').attr('placeholder',prioritas);
      $(e.currentTarget).find('input[name="shopeeLink"]').attr('placeholder',shopee);
      $(e.currentTarget).find('textarea[name="youtube"]').attr('placeholder',youtube);
      $(e.currentTarget).find('select[name="produkKategori"]').val(kategori);
      $(e.currentTarget).find('textarea[name="metaDeskripsi"]').val(meta);
      $(e.currentTarget).find('#formUbahProduk').attr('action','produk/'+ProdukId);
      quillProdukEdit.clipboard.dangerouslyPasteHTML(deskripsi);
      $(e.currentTarget).find('#inputDeskripsiEdit').val(quillProdukEdit.root.innerHTML);

      $(e.currentTarget).find('#existingImageFrame').empty();
      
      $.each( lampiranTerpasang, function( key, value ) {
        var delBtn = lampiranTerpasang.length>1?'<button type="button" class="btn btn-danger shadow rounded-circle m-2" style="position:absolute;top:0;right:0;" onclick="removeImage('+ProdukId+','+value.key+','+lampiranTerpasang.length+')"><i class="fas fa-trash text-white"></i></button>':'';
        $(e.currentTarget).find('#existingImageFrame').append('<div class="col-md-3 p-2" id="existingImg'+value.key+'"><img src="/storage/'+value.path+'" class="img-fluid shadow">'+delBtn+'</div>');
      });

      var uploadQuota = 5 - $('#existingImageFrame img').length;
      console.log('quota: '+ uploadQuota);
      imgUpdatePlugin.imgQuota(uploadQuota);
      imgUpdatePlugin.biggerImg(false);
    });

    function removeImage(produkId, imgKey,arraySize){
      console.log('delete trigger for produk id '+produkId+', img key:' +imgKey);
      $.ajax({
        type: "POST",
        url: '{{route("delete-produk-image")}}',
        data: {'_token':'{{csrf_token()}}','id':produkId,'imgKey':imgKey},
      }).done(function(result, statusText, xhr) {
        $('#existingImg'+imgKey).remove();
        imgUpdatePlugin.addOneQuota();
        requireRefreshOnCloseModal=true;
        var afterRemoveLength = arraySize - 1;
        if(afterRemoveLength==1){
          $('#existingImageFrame').find('button').remove();
        }
      }).fail(function(result , statusText, xhr) {
        console.log(result);
      });
    }

    $('#modalUbahProduk').on('hidden.bs.modal', function () {
      if(requireRefreshOnCloseModal){
        location.reload();
      }
    });

    $('#modalHapusProduk').on('show.bs.modal', function(e) {
   
      //ambil data yang dikirim dari button show modal
      var namaProduk = $(e.relatedTarget).data('nama_produk');
      var ProdukId = $(e.relatedTarget).data('id');

      //isi data yang diambil tadi ke placeholder input
      $(e.currentTarget).find('#labelHapusProduk').text('Yakin mau hapus Produk: '+namaProduk);
      $(e.currentTarget).find('#formHapurProduk').attr('action','produk/'+ProdukId);
    });
    </script>
@stop