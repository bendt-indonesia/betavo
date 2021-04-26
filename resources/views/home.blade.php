@extends('layouts.frontend', [
    "meta_title" => el($page,'meta-title'),
    "meta_desc" => el($page,'meta-description'),
    "meta_keys" => el($page,'meta-keys'),
])

@section('head')

@endsection

@section('content')

    <section data-id="home" class="section section-slide new-homeslider fullsize-slide section-page">
        <div class="page-cover" data-color="">
            <h2 class="main-title">New Arrival</h2>
            <!-- Cover Background -->
            <div class="cover-bg pos-abs size-full bg-img"
                 data-image-src="{{el_url($page,'intro-background')}}"
                 style="background-repeat: no-repeat; background-position: center center; background-size: cover;">
            </div>
            <div class="cover-bg pos-abs size-full bg-cover-gradientradial-centered opacity-9">
            </div>
        </div>
        <div class="swiper-container swiper-main-page">
            <div class="swiper-wrapper">
                @foreach($featured as $produk)
                <div class="swiper-slide">
                    @include('component.productListHome',['proList'=>$produk ,'btnLine' => 'text-white'])
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

   {{-- <!-- Begin of home -->
    <section data-id="home" class="section section-home header-home">
        <div class="page-cover" data-color="">
            <!-- Cover Background -->
            <div class="cover-bg pos-abs size-full bg-img"
                 data-image-src="{{el_url($page,'intro-background')}}"
                 style="background-repeat: no-repeat; background-position: center center; background-size: cover;">
            </div>
            <div class="cover-bg pos-abs size-full bg-cover-gradientradial opacity-9">
            </div>
        </div>
        <div class="section-title title-right">
        </div>
        <div class="section-content align-x-center anim">
            <div class="width-medium">
                Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            </div>
        </div>
        <div class="section-footer section-footer-a anim">
            <div class="footer-right mr-4">
                <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
                    <span class="text">{{el($page,'scroll')}}</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
                    <span class="arrow-down"></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- End of home -->--}}

    <!-- Begin of about -->
    <section data-id="about" class="section section-page fp-auto-height-responsive">
        <div class="cover-bg pos-abs size-full bg-img w-100 h-100"
             data-image-src="{{el_url($about,'about-background')}}"
             style="background-repeat: no-repeat;
                 background-position: center center;
                 background-size: cover;"></div>
        <div class="cover-bg pos-abs size-full w-100 h-100 bg-cover-gradientradial opacity-9"></div>

        <div class="section-margin anim">
            <!-- begin of .section-header -->
            <div class="section-header align-x-center">
                <div class="h-content width-medium">
                    <h2 class="h-title font-title anim-1">
                        {!! el($about,'about-title') !!}
                    </h2>
                </div>
            </div>
            <!-- end of .section-header -->

            <!-- begin of .section-content -->
            <div class="section-content align-x-center">
                <div class="c-wrapper width-medium text-wrapper">
                    <div class="row gutters">
                        <div class="col-12 col-lg-6">
                            <div class="content-text anim-2">
                                {!! el($about,'about-description') !!}
                            </div>
                        </div>
                    </div>
                    @if(el($about,'about-button-text'))
                        <div class="btns-group mt-5">
                            <a class="btn btn-line-a anim-4" href="{{el($about,'about-button-url')}}">
                                <span class="text">{{el($about,'about-button-text')}}</span>
                                <span class="icon icon-menu icon-arrow-a icon-anim">
                                    <span class="arrow-right"></span>
                                </span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <!-- end of .section-content -->
        </div>

        <div class="section-footer section-footer-a d-none d-lg-block ">
            <div class="footer-right mr-4">
                <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
                    <span class="text">{{el($page,'scroll')}}</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-down"></span>
            </span>
                </a>
            </div>
        </div>
    </section>
    <!-- End of about -->

    <!-- Begin of gallery -->
    <section data-id="gallery" class="section section-slide fullsize-slide section-page fp-auto-height-responsive">
        <div class="slide-size">
            <div class="section-slides slider-b swiper-container anim">
                <!-- slider wrapper -->
                <div class="swiper-wrapper slider-wrapper">
                    <!-- .slide-item -->
                    @foreach(stores('category') as $kategori)
                        <div class="swiper-slide slide-item">
                            <div class="slide-b slide-anim fullscreen-slide content-top">
                                <div class="slide-bg fade-1" style="filter:grayscale(100%) brightness(60%);">
                                    <img class="img-block"
                                         src="{{Storage::url($kategori->image_url)}}">
                                </div>

                                <div class="slide-content">
                                    <div class="c-wrapper width-medium flex-col flex-full">
                                        <div class="row no-gutters flex-full">
                                            <!-- bg-black-50 dihilangkan, QC minta diremove -->
                                            <div class="col col-12 col-lg-6 content-center px-lg-3">
                                                <div class="slide-text">
                                                    <div class="s-header anim-1">
                                                        <h2 class="s-title font-title ">
                                                            {{$kategori->nama_kategori}}
                                                        </h2>
                                                    </div>
                                                    <div class="s-text anim-2">
                                                        <p>{{$kategori->deskripsi}}</p>
                                                        <a class="btn btn-line-a mt-5" href="{{route('category',['cat' => $kategori->slug])}}">
                                                            <span class="text ">Produk kami</span>
                                                            <span class="icon icon-menu icon-arrow-a icon-anim">
                                                                <span class="arrow-right"></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                @endforeach
                </div>
                <!-- end of .slide-item -->
                @include('component.arrow')
                <div class="slider-pagination swiper-pagination"></div>
            </div>
        </div>

        <div class="section-footer section-footer-a  d-none d-lg-block ">
            <div class="footer-right mr-4">
                <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
                    <span class="text">{{el($page,'scroll')}}</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-down"></span>
            </span>
                </a>
            </div>
        </div>

    </section>
    @include('component.contact')
@endsection

@section('script')

@endsection
