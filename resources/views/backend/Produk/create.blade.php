@extends('layouts.backend', [

])
@section('title', 'Add New List Produk')
@section('title_right')
    <div class="pull-right">
        <a href="{{route('backend.produk.index')}}" class="btn btn-info btn-sm">
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
                        List Produk Form
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.produk.store')}}" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-body">
							<div class="form-group">
							    <label for="meta_title">Meta Title</label>
							    <input type="text" class="form-control " id="meta_title" name="meta_title"
							           value="{{old("meta_title")}}" required/>
							</div>

							<div class="form-group">
							    <label for="meta_description">Description</label>
							    <textarea rows="4" class="form-control "
							         id="meta_description"
							         name="meta_description"
							         >{{old("meta_description")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="meta_keywords">Keywords</label>
							    <textarea rows="4" class="form-control "
							         id="meta_keywords"
							         name="meta_keywords"
							         >{{old("meta_keywords")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="prioritas">Prioritas</label>
							    <input type="number" class="form-control " id="prioritas" name="prioritas"
							           value="{{old("prioritas")}}" required/>
							</div>

							<div class="form-group">
							    <label for="id_kategori">Sub Kategori</label>
							    <select class="form-control " id="id_kategori" name="id_kategori" required>
							        <option value="">-- Select Sub Kategori --</option>
							        @foreach($id_kategori as $item)
							            <option {{selected('id_kategori', $item->id)}} value="{{$item->id}}">{{$item->name}}</option>
							        @endforeach
							    </select>
							</div>

							<div class="form-group">
							    <label for="nama_produk">Nama Sub Kategori</label>
							    <input type="text" class="form-control " id="nama_produk" name="nama_produk"
							           value="{{old("nama_produk")}}" required/>
							</div>

							<div class="form-group">
							    <label for="deskripsi">Deskripsi Produk</label>
							    <textarea rows="4" class="form-control tmce"
							         id="deskripsi"
							         name="deskripsi"
							          required>{{old("deskripsi")}}</textarea>
							</div>

							<div class="form-group">
							    <label for="link_bukalapak">Nama Sub Kategori</label>
							    <input type="text" class="form-control " id="link_bukalapak" name="link_bukalapak"
							           value="{{old("link_bukalapak")}}" required/>
							</div>

							<div class="form-group">
							    <label for="link_shopee">Nama Sub Kategori</label>
							    <input type="text" class="form-control " id="link_shopee" name="link_shopee"
							           value="{{old("link_shopee")}}" required/>
							</div>

							<div class="form-group">
							    <label for="link_tokopedia">Nama Sub Kategori</label>
							    <input type="text" class="form-control " id="link_tokopedia" name="link_tokopedia"
							           value="{{old("link_tokopedia")}}" required/>
							</div>

							<div class="form-group">
							    <label for="image_url_1">Image Url 1</label>

							    <input type="file" class="input-file" id="image_url_1"
							           name="image_url_1"
							           value="{{old("image_url_1")}}" />
							    <label for="image_url_1" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
							</div>

							<div class="form-group">
							    <label for="image_url_2">Image Url 2</label>

							    <input type="file" class="input-file" id="image_url_2"
							           name="image_url_2"
							           value="{{old("image_url_2")}}" />
							    <label for="image_url_2" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
							</div>

							<div class="form-group">
							    <label for="image_url_3">Image Url 3</label>

							    <input type="file" class="input-file" id="image_url_3"
							           name="image_url_3"
							           value="{{old("image_url_3")}}" />
							    <label for="image_url_3" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
							</div>

							<div class="form-group">
							    <label for="image_url_4">Image Url 4</label>

							    <input type="file" class="input-file" id="image_url_4"
							           name="image_url_4"
							           value="{{old("image_url_4")}}" />
							    <label for="image_url_4" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
							</div>

							<div class="form-group">
							    <label for="image_url_5">Image Url 5</label>

							    <input type="file" class="input-file" id="image_url_5"
							           name="image_url_5"
							           value="{{old("image_url_5")}}" />
							    <label for="image_url_5" class="btn btn-file js-labelFile">
							        <i class="icon fa fa-check"></i>
							        <span class="js-fileName">Change file</span>
							    </label>
							</div>

							<div class="form-group">
							    <label for="youtube_video_url_1">Youtube Video URL</label>
							    <input type="text" class="form-control " id="youtube_video_url_1" name="youtube_video_url_1"
							           value="{{old("youtube_video_url_1")}}" required/>
							</div>


                        </div>
                        <div class="form-actions">
                            <a href="{{route('backend.produk.index')}}" class="btn btn-default">Back to List</a>
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
