@extends('layouts.backend', [

])

@section('title', 'Pesan Pengunjung List')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.client_messages.create')}}" class="btn btn-success btn-sm">
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
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Message</th>
									<th>Origin</th>

                                    <th width="1"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
									<td>{{$item->id}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->email}}</td>
									<td>{{$item->message}}</td>
									<td>{{$item->origin}}</td>

                                    <td style="white-space: nowrap">
                                        <form action="{{route('backend.client_messages.destroy', ['id' => $item->id])}}"
                                              method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{route('backend.client_messages.edit', ['id' => $item->id])}}"
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
