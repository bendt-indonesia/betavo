@extends('layouts.frontend', [
    "meta_title" => $produkSubKategori?$produkSubKategori->meta_title:$produkKategori->meta_title,
    "meta_desc" => $produkSubKategori?$produkSubKategori->meta_description:$produkKategori->meta_description,
    "meta_keys" => $produkSubKategori?$produkSubKategori->meta_keywords:$produkKategori->meta_keywords,
    "footer_bg" => true,
    "main_class" => 'white-page'
])

@section('head')

@endsection

@section('content')
    <!-- BEGIN OF page cover -->
    <div class="page-cover" style="position:fixed;">
        <!-- Cover Background -->
        <div class="cover-bg pos-abs size-full bg-cover-gradientradial opacity-9"></div>

    </div>

    <section data-id="featured-projects" class="section section-page  fp-auto-height-responsive">
        <div class="section-margin top-margin anim">
            <div class="section-header align-x-center">
                <div class="width-large d-flex bd-highlight">
                    <div class=" d-flex justify-content-end align-items-center">
                        <h1 class="h-title font-title anim-1 d-inline pb-0 text-white">
                            @if($produkSubKategori)
                                {{$produkSubKategori->nama_sub_kategori}}
                            @else
                                {{$produkKategori->nama_kategori}}
                            @endif
                        </h1>
                    </div>
                    <div class="navbar-toggler d-none d-lg-inline d-lg-flex justify-content-end align-items-center"
                         style="flex-grow:1">
                        <a id="menu-icon1" class="menu-toggler btn- btn btn-line-b py-3 py-md-0 text-white" href="#">
                            <span class="bd-left text multiline t-upper fs-normal d-none d-md-flex">
                              <i class="icon fa fa-search" style="font-size: 20pt;"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="width-large m-0 p-0">
                    <a href="{{route('category',['cat' => $produkKategori->slug])}}" class="text-white">
                        {{$produkKategori->nama_kategori}}
                    </a>
                    @if(isset($produkSubKategori))
                        <span class="icon icon-menu icon-arrow-a icon-anim">
                            &raquo;
                        </span>
                        <a class="text-white"
                           href="{{route('category',['cat' => $produkKategori->slug, 'sub' => $produkSubKategori->slug])}}">
                            {{$produkSubKategori->nama_sub_kategori}}
                        </a>
                    @endif
                </div>

            </div>

            <div class="section-header align-x-center">
                <div class="width-large d-flex bd-highlight">
                    <p style="max-width: none;margin-top: 20px" class=" text-white">{{$produkKategori->deskripsi}}</p>
                </div>
            </div>

            <div class="section-content align-x-center">
                <div class="c-wrapper width-large anim-3">
                    <div class="row">

                    @if(count($listProduk)>0)
                        @foreach($listProduk as $produk)
                            @include('component.productList',['proList'=>$produk ,'btnLine' => 'text-white'])
                        @endforeach
                        @else
                            <div class="mt-4 col-12 col-md-6">
                                <p class="text-white">Produk belum tersedia.</p>
                            </div>
                        @endif
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $listProduk->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
