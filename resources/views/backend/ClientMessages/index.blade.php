@extends('layouts.backend', [

])

@section('meta_title', 'Pesan Pengunjung List')
@section('title_right')
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
