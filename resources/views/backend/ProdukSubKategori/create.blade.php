@extends('layouts.backend', [

])
@section('title', 'Add New Sub Kategori Produk')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.produk_sub_kategori.index')}}" class="btn btn-info btn-sm">
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
                        Sub Kategori Produk Form
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.produk_sub_kategori.store')}}" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-body">
							<div class="form-group">
							    <label for="meta_title">Meta Title</label>
							    <input type="text" class="form-control " id="meta_title" name="meta_title"
							           value="{{old("meta_title")}}" placeholder='Judul yang muncul di pencarian Google, (default dari Nama Produk)' required/>
							</div>

							<div class="form-group">
							    <label for="meta_description">Meta Description</label>
							    <textarea rows="4" class="form-control "
							         id="meta_description"
							         name="meta_description"
							         >{{old("meta_description")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="meta_keywords">Meta Keywords</label>
							    <textarea rows="4" class="form-control "
							         id="meta_keywords"
							         name="meta_keywords"
							         >{{old("meta_keywords")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="prioritas">Urutan ke</label>
							    <input type="number" class="form-control " id="prioritas" name="prioritas"
							           value="{{old("prioritas")}}" placeholder='Urutan tampilan, diurutkan dari angka kecil ke besar' required/>
							</div>

							<div class="form-group">
							    <label for="id_kategori">Sub Kategori</label>
							    <select class="form-control " id="id_kategori" name="id_kategori" required>
							        <option value="">-- Select Sub Kategori --</option>
							        @foreach($id_kategori as $item)
							            <option {{selected('id_kategori', $item->id)}} value="{{$item->id}}">{{$item->nama_kategori}}</option>
							        @endforeach
							    </select>
							</div>

							<div class="form-group">
							    <label for="nama_sub_kategori">Nama Sub Kategori</label>
							    <input type="text" class="form-control " id="nama_sub_kategori" name="nama_sub_kategori"
							           value="{{old("nama_sub_kategori")}}" required/>
							</div>

							<div class="form-group">
							    <label for="deskripsi">Deskripsi</label>
							    <textarea rows="4" class="form-control "
							         id="deskripsi"
							         name="deskripsi"
							         >{{old("deskripsi")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="image_url">Image Url</label>

							    <input type="file" class="input-file" id="image_url"
							           name="image_url"
							           value="{{old("image_url")}}"  required/>
							    <label for="image_url" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
<small>( 1366 x 768 ) px</small>
							</div>

							<div class="form-group">
							    <label class="control-label">Is Active</label>
							    <div class="form-group">
							        @foreach(["No", "Yes"] as $key => $value)
							            <div class="radio d-inline mr-3">
							                <label>
							                    <input type="radio"
							                           name="is_active"
							                           value="{{$key}}"
							                        {{checked_radio('is_active', $key , 1)}}
							                     required>
							                    {{$value}}
							                </label>
							            </div>
							        @endforeach
							    </div>
							</div>


                        </div>
                        <div class="form-actions">
                            <a href="{{route('backend.produk_sub_kategori.index')}}" class="btn btn-default">Back to List</a>
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
