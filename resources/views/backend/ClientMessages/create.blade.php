@extends('layouts.backend', [

])
@section('title', 'Add New Pesan Pengunjung')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.client_messages.index')}}" class="btn btn-info btn-sm">
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="text-white m-b-0">
                        Pesan Pengunjung Form
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.client_messages.store')}}" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-body">

                        </div>
                        <div class="form-actions">
                            <a href="{{route('backend.client_messages.index')}}" class="btn btn-default">Back to List</a>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
