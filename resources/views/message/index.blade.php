@extends('adminlte::page')

@section('title', 'Pesan dari klien')

@section('plugins.Datatables', true)


@section('content_header')

    <h1>Pesan dari klien</h1>
    <small>Pesan yang dikirim user dari homepage.</small>
<hr/>
@stop

@section('content')
<div class="bg-white border p-3 shadow">
<table id="tablePesan" class="display table" style="width:100%">
        <thead>
            <tr>
            <th>Pengirim</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Origin</th>
            <th>Dicatat <span class="badge badge-secondary">UTC+7</span></th>
            </tr>
        </thead>
        <tbody>
        @foreach($pesan as $key=>$item)
            <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->message}}</td>
              <td>{{$item->origin}}</td>
              <td>{{\Carbon\Carbon::parse($item->created_at)->addHours(7)}}</td>
            </tr>
        @endforeach
        </tbody>
</table>
<div class="row mt-5">
<div class="col-12 d-flex justify-content-end">
{{ $pesan->links() }}
</div>
</div>
</div>
@stop

@section('css')
@stop

@section('js')
    <script>
    $(document).ready( function () {
      $('#tablePesan').DataTable();
    });
    </script>
@stop