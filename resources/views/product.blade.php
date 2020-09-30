@extends('layouts.frontend', [
    "meta_title" => $produk->meta_title,
    "meta_desc" => $produk->meta_description,
    "meta_keys" => $produk->meta_keywords,
    "main" => true,
    "main_class" => 'white-page pt-150',
    "footer_hide" => true,
])

<?php
$link = 'lihat disini '.Request::url();
$title = 'Produk '.$produk->produk_sub_kategori->nama_sub_kategori.' dari Betavo '.$produk->nama_produk;
$body = $title.', '.$link;
?>

@section('head')
    <meta property="og:title" content="{{$produk->meta_title}}" />
    <meta property="og:type" content="text/html" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:image" content="{{url('/')}}{{Storage::url($produk->image_url_1)}}" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:site_name" content="Betavo Audio - Indonesia" />
    <meta property="og:description" content="{{$body}}" />
    <meta name="twitter:card" content="summary" /> <!--The card type, which will be one of “summary”, “summary_large_image”, “app”, or “player”. -->
    <meta name="twitter:site" content="@hupercloud" />
    <meta name="twitter:domain" content="www.betavoaudio.com" />
    <meta name="twitter:title" content="{{$produk->meta_title}}" />
    <meta name="twitter:description" content="{{$body}}" />
    <meta name="twitter:image" content="{{$produk->image_url_1}}" />
@endsection

@section('bottom')
    @if($produk->youtube_video_url_1 != '')
        <div id="youtubePreview" class="modalImg">
            <span class="close" id="youtubeClose">&times;</span>
            <div class="d-flex justify-content-center align-items-center" id="youtubeWrapperPreview"></div>
            <div id="caption"></div>
        </div>
    @endif
@endsection

@section('content')
    <section data-id="main-features" class="section section-page top-margin">
        <div class="section-cover"></div>
        <div class="section-margin-off" >
            <div class="section-content mt-5 mb-5 align-x-center">
                <div class="container">
                    <div class="row">
                        <div class="p-0 col-12 col-lg-6">
                            <div class="swiper-container swiper-product">

                                <div class="swiper-wrapper d-flex align-items-center">
                                    @if($produk->youtube_video_url_1 != '')
                                        <div class="swiper-slide w-100 px-0" id="youtubeWrapper" data-video-id="{{$produk->youtube_video_url_1}}">
                                            <iframe width="600" height="600"
                                                    src="https://www.youtube.com/embed/{{$produk->youtube_video_url_1}}"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    @endif
                                    @foreach([1,2,3,4,5] as $i)
                                        @if($produk->{'image_url_'.$i} != '')
                                            <div class="swiper-slide">
                                                <img src="{{Storage::url($produk->{'image_url_'.$i} )}}" class="img-fluid zoomableImg" />
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next p-md-4" style="filter:grayscale(100%)"></div>
                                <div class="swiper-button-prev p-md-4" style="filter:grayscale(100%)"></div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination" ></div>
                            </div>
                        </div>
                        <div class="p-0 p-md-4 col-12 col-lg-6">
                            <hr class="m-0 mt-4 mb-4"/>
                            @if(isset($produk->produk_sub_kategori->produk_kategori))
                                <a href="{{route('category',['cat' => $produk->produk_sub_kategori->produk_kategori->slug])}}" class="text-gray">
                                    {{$produk->produk_sub_kategori->produk_kategori->nama_kategori}}
                                </a>
                                <span class="icon icon-menu icon-arrow-a icon-anim">
                                    &raquo;
                                </span>
                            @endif
                            <a class="text-gray"
                               href="{{route('category',['cat' => $produk->produk_sub_kategori->produk_kategori->slug, 'sub' => $produk->produk_sub_kategori->slug])}}">
                                {{$produk->produk_sub_kategori->nama_sub_kategori}}
                            </a>

                            <h1 class="h-title pt-10">
                                {{ $produk->nama_produk }}
                            </h1>

                            <hr class="m-0 mt-4 mb-4"/>
                            <div class="d-block">
                                {!! $produk->deskripsi !!}
                            </div>
                            <div class="d-block mt-4 mb-4">
                                <p>Beli Produk:</p>
                                @if(isset($produk->link_tokopedia))
                                    <a class="mr-4 text-gray pointer" href="{{$produk->link_tokopedia}}"><img class="icon-mp" src="{{asset('/static/Betavo_Icons_Tokopedia.png')}}" alt="Beli {{$produk->nama_produk}} di Tokopedia"></a>
                                @endif
                                @if(isset($produk->link_shopee))
                                    <a class="mr-4 text-gray pointer" href="{{$produk->link_shopee}}"><img class="icon-mp" src="{{asset('/static/Betavo_Icons_Shopee.png')}}" alt="Beli {{$produk->nama_produk}} di Shopee"></a>
                                @endif
                                @if(isset($produk->link_bukalapak))
                                    <a class="mr-4 text-gray pointer" href="{{$produk->link_bukalapak}}"><img class="icon-mp" src="{{asset('/static/Betavo_Icons_Bukalapak.png')}}" alt="Beli {{$produk->nama_produk}} di Bukalapak"></a>
                                @endif
                            </div>
                            <div class="d-block mt-4 mb-4">
                                <p>Bagikan Produk:</p>
                                <a class="mr-3 text-gray pointer" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"><img src="{{asset('/static/Betavo_Icons_Facebook.svg')}}" class="icon-mp"></a>
                                <a class="mr-3 text-gray pointer" href="https://twitter.com/intent/tweet?text={{$body}}"><img src="{{asset('/static/Betavo_Icons_Twitter.svg')}}" class="icon-mp"></a>
                                <a class="mr-3 text-gray pointer" href="https://wa.me/?text={{$body}}"><img src="{{asset('/static/Betavo_Icons_Whatsapp.svg')}}" class="icon-mp"></a>
                                <a class="mr-3 text-gray pointer" href="https://t.me/share/url?url={{$produk->nama_produk}}&text={{$title}}"><img src="{{asset('/static/Betavo_Icons_Telegram.svg')}}" class="icon-mp"></a>
                                <a class="mr-3 text-gray pointer" href="mailto:betavo.audio@gmail.com&subject={{$title}}&body={{$body}}"><img src="{{asset('/static/Betavo_Icons_Email.svg')}}" class="icon-mp"></a>
                            </div>
                            <div class="d-block mt-2 mb-4">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-id="main-features" class="section section-page bg-light-gray ">
        <div class="section-cover"></div>
        <div class="section-margin-off algo-mt-5">
            <div class="section-header align-x-center">
                <div class="h-content width-medium text-gray">

                </div>
            </div>
            <div class="section-content mt-5 mb-5 align-x-center">
                <div class="container">
                    <h2>Produk serupa dari Betavo Audio</h2>
                    <div class="row mb-5">
                        @foreach($produkSerupa as $row)
                            <div class="mt-2 mt-md-4 col-12 col-md-4 col-lg-3 mb-3">
                                <a href="{{route('product',['slug'=>$row->slug])}}" class="text-gray link-plain">
                                    <div class="item-grid-a">
                                        <div class="item-img mt-4 mb-4 rounded-border">
                                            <img class="img imgProduk" src="{{\Storage::url($row->image_url_1)}}">
                                        </div>
                                        <div class="item-header">
                                            <p class="min-height-product"><b
                                                    class=" force-title">{{$row->nama_produk}}</b></p>
                                        </div>
                                        <div class="item-content">
                                            <p style="font-size: 12pt; min-height:80px">
                                                {{$row->deskripsi}}
                                            </p>
                                            <a class="btn btn-line-a mt4" href="{{route('product',['slug'=>$row->slug])}}">
                                                <span class="text">Lihat detail</span>
                                                <span class="icon icon-menu icon-arrow-a icon-anim">
                                                        <span class="arrow-right"></span>
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content_below')
    @include('component.contact')

@endsection
