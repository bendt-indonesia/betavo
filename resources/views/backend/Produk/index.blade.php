@extends('layouts.backend', [

])

@section('title', 'List Produk List')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.produk.create')}}" class="btn btn-success btn-sm">
            <i class="fa fa-plus mr-2"></i>
            Add
        </a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered m-t-3 dtb">
                            <thead>
                                <tr>
									<th>Urutan ke</th>
									<th>Sub Kategori</th>
									<th>Nama Produk</th>
									<th>Link Bukalapak</th>
									<th>Link Shopee</th>
									<th>Link Tokopedia</th>
									<th>Is Active</th>
									<th>Last Update</th>

                                    <th width="1"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
									<td>{{$item->prioritas}}</td>
									<td>{{$item->produk_sub_kategori->nama_sub_kategori}}</td>
									<td>{{$item->nama_produk}}</td>
									<td>{{$item->link_bukalapak}}</td>
									<td>{{$item->link_shopee}}</td>
									<td>{{$item->link_tokopedia}}</td>
									<td>{{\App\Enums\YesNo::$STATUS_LIST[$item->is_active]}}</td>
									<td>{{$item->updated_at}}</td>

                                    <td style="white-space: nowrap">
                                        <form action="{{route('backend.produk.destroy', ['produk' => $item->id])}}"
                                              method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{route('backend.produk.edit', ['produk' => $item->id])}}"
                                               class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    confirm="Are you sure you want to remove {{$item->name}}?">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
