@extends('adminlte::page')

@section('title', 'info')

@section('plugins.Datatables', true)

@section('adminlte_css')
<style>
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: black !important;
  opacity: 1 !important; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: black !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: black !important;
}
</style>
@endsection

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
    informasi baru berhasil tersimpan.
  </div>
  @endif
  @if($statusCreate=="fail")
  <div class="alert alert-danger" role="alert">
  informasi baru gagal disimpan.
  </div>
  @endif
  @if($statusUpdate=="success")
  <div class="alert alert-success" role="alert">
  informasi berhasil diubah.
  </div>
  @endif
  @if($statusUpdate=="fail")
  <div class="alert alert-danger" role="alert">
  informasi gagal diubah.
  </div>
  @endif
  @if($statusDelete=="success")
  <div class="alert alert-success" role="alert">
  informasi berhasil dihapus.
  </div>
  @endif
  @if($statusDelete=="fail")
  <div class="alert alert-danger" role="alert">
  informasi gagal dihapus.
  </div>
  @endif
@endif

    <h1>Informasi usaha</h1>
    <!-- Button trigger modal -->

<hr/>
@stop

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 mb-5">
      <form action="{{isset($informasi)?route('info.update',['info'=>$informasi->id]):route('info.store')}}" method="post">
        @csrf
        @if(isset($informasi))
        @method('PUT')
        @endif
        <div class="form-group">
          <label for="brand">Nama brand {{!isset($informasi)?'(wajib isi)':''}}</label>
          <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brand" placeholder="{{isset($informasi->nama_brand)?$informasi->nama_brand:'Masukan nama brand'}}" {{!isset($informasi)?'required':''}}>
        </div>
        <div class="form-group">
          <label for="phone">Nomor telpon {{!isset($informasi)?'(wajib isi)':''}}</label>
          <input type="text" class="form-control"name="phone" id="phone" aria-describedby="phone" placeholder="{{isset($informasi->nomor_telpon)?$informasi->nomor_telpon:'Masukan nomor kontak'}}" {{!isset($informasi)?'required':''}}>
        </div>
        <div class="form-group">
          <label for="email">email {{!isset($informasi)?'(wajib isi)':''}}</label>
          <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="{{isset($informasi->email)?$informasi->email:'Masukan email'}}" {{!isset($informasi)?'required':''}}>
        </div>
        <div class="form-group">
          <label for="shortDescription">deskripsi singkat {{!isset($informasi)?'(wajib isi)':''}}</label>
          <textarea rows="5" maxlength="320" class="form-control" name="shortDescription" id="shortDescription" aria-describedby="shortDescription" placeholder="{{isset($informasi->deskripsi_singkat)?$informasi->deskripsi_singkat:'Masukan deskripsi singkat'}}" {{!isset($informasi)?'required':''}}></textarea>
          <small id="shortDescription" class="form-text text-muted">Maksimal 320 karakter</small>
        </div>
        <div class="form-group">
          <label for="longDescription">deskripsi lengkap {{!isset($informasi)?'(wajib isi)':''}}</label>
          <textarea rows="5" maxlength="400" class="form-control" name="longDescription" id="longDescription" aria-describedby="longDescription" placeholder="{{isset($informasi->deskripsi_lengkap)?$informasi->deskripsi_lengkap:'Masukan deskripsi lengkap'}}" {{!isset($informasi)?'required':''}}></textarea>
          <small id="longDescription" class="form-text text-muted">Maksimal 400 karakter</small>
        </div>
        <div class="form-group">
          <label for="location">lokasi</label>
          <textarea rows="5" class="form-control" name="location" id="location" aria-describedby="location" placeholder="{{isset($informasi->lokasi)?$informasi->lokasi:'Masukan lokasi usaha'}}"></textarea>  
        </div>
        <div class="form-group">
          <label for="tokped">link tokopedia</label>
          <input type="text" class="form-control" name="tokpedLink" id="tokped" aria-describedby="tokped" placeholder="{{isset($informasi->link_tokopedia)?$informasi->link_tokopedia:'Link tokopedia anda'}}">
        </div>
        <div class="form-group">
          <label for="blLink">link bukalapak</label>
          <input type="text" class="form-control" name="blLink" id="blLink" aria-describedby="blLink" placeholder="{{isset($informasi->link_bukalapak)?$informasi->link_bukalapak:'Link bukalapak anda'}}">
        </div>
        <div class="form-group">
          <label for="shopeeLink">link shopee</label>
          <input type="text" class="form-control" name="shopeeLink" id="shopeeLink" aria-describedby="shopeeLink" placeholder="{{isset($informasi->link_shopee)?$informasi->link_shopee:'Link shopee anda'}}">
        </div>
        <div class="form-group">
          <label for="fbLink">link facebook</label>
          <input type="text" class="form-control" name="fbLink" id="fbLink" aria-describedby="fbLink" placeholder="{{isset($informasi->link_facebook)?$informasi->link_facebook:'Link facebook anda'}}">
        </div>
        <div class="form-group">
          <label for="igLink">link instagram</label>
          <input type="text" class="form-control" name="igLink" id="igLink" aria-describedby="igLink" placeholder="{{isset($informasi->link_instagram)?$informasi->link_instagram:'Link instagram anda'}}">
        </div>
        <button type="submit" class="btn btn-primary">{{isset($informasi)?'Update':'Submit'}}</button>
      </form>

    </div>
  </div>
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(document).ready( function () {
    $('#tableInformasi').DataTable();
    } );


    $('#modalUbahInformasi').on('show.bs.modal', function(e) {

    //ambil data yang dikirim dari button show modal
    //tambahkan ini
    var id = $(e.relatedTarget).data('id');
    var judul = $(e.relatedTarget).data('judul');
    var telpon = $(e.relatedTarget).data('nomor_telpon');
    var email = $(e.relatedTarget).data('email');
    var deskripsi = $(e.relatedTarget).data('deskripsi');
    var lokasi = $(e.relatedTarget).data('lokasi');

    //isi data yang diambil tadi ke placeholder input
    $(e.currentTarget).find('input[name="judul"]').attr('placeholder',judul);
    $(e.currentTarget).find('input[name="telpon"]').attr('placeholder',telpon);
    $(e.currentTarget).find('select[name="email"]').val(email);
    $(e.currentTarget).find('textarea[name="deskripsi"]').val(deskripsi);
    $(e.currentTarget).find('textarea[name="lokasi"]').val(lokasi);

    //tambahkan ini
    $(e.currentTarget).find('#formUbahInformasi').attr('action','info/'+id);

    });

    $('#modalHapusInformasi').on('show.bs.modal', function(e) {

    //ambil data yang dikirim dari button show modal
    var id = $(e.relatedTarget).data('id');
    var judul = $(e.relatedTarget).data('judul');
    var telpon = $(e.relatedTarget).data('nomor_telpon');
    // var email = $(e.relatedTarget).data('email');
    // var deskripsi = $(e.relatedTarget).data('deskripsi');
    // var lokasi = $(e.relatedTarget).data('lokasi');

    //isi data yang diambil tadi ke placeholder input
    $(e.currentTarget).find('#labelHapusInformasi').text('Yakin mau hapus informasi: '+judul);
    $(e.currentTarget).find('#formHapusInformasi').attr('action','info/'+id);
    });
 
    </script>
@stop