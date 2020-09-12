@extends('layouts.backend', [

])

@section('title', 'Sub Kategori Produk List')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.produk_sub_kategori.create')}}" class="btn btn-success btn-sm">
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
									<th>Sort_No</th>
									<th>Name</th>
									<th>Description</th>
									<th>Is Active</th>

                                    <th width="1"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
									<td>{{$item->sort_no}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->description}}</td>
									<td>{{$item->is_active}}</td>

                                    <td style="white-space: nowrap">
                                        <form action="{{route('backend.produk_sub_kategori.destroy', ['id' => $item->id])}}"
                                              method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{route('backend.produk_sub_kategori.edit', ['id' => $item->id])}}"
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
