@extends('layouts.frontend', [
    "meta_title" => el($page,'meta-title'),
    "meta_desc" => el($page,'meta-description'),
    "meta_keys" => el($page,'meta-keys'),
])

@section('head')

@endsection

@section('content')
    <!-- Begin of home -->
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
        <div class="section-content align-x-center align-y-center anim">
            <div class="width-medium">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="home-left content-text">
                            <!-- NOTE:QC minta hilangkan brand identity
                              <h1 class="h-title font-title fw-normal anim-3 " style="font-size:3rem">{!! el($page,'intro-title') !!}</h1>
                            -->
                            <div class="text mb-5 anim-4">
                                {!! el($page,'intro-description') !!}
                            </div>
                            @if(el($page,'into-button-text'))
                            <div class="btns-group anim-5">
                                <a class="btn btn-line-a" href="{{el($page,'into-button-url')}}">
                                    <span class="text ">{{el($page,'into-button-text')}}</span>
                                    <span class="icon icon-menu icon-arrow-a icon-anim">
                                      <span class="arrow-right"></span>
                                    </span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex min-h-full">
                    </div>
                </div>

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
    <!-- End of home -->

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
                                    <img class="img-block" alt="$img[0]->alt"
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
                                                        <a class="btn btn-line-a mt-5" href="#">
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

                <!-- slider arrows -->
                <div class="slider-arrow">
                    <a class="slider-prev btn btn-line-b slider-btn-top d-none d-lg-inline" href="#">
                          <span class="icon icon-menu icon-arrow-a icon-anim">
                            <span class="arrow-left"></span>
                          </span>
                        <span class="text">{{el($page,'previous')}}</span>
                    </a>
                    <a class="slider-next btn btn-line-b d-none d-lg-inline" href="#">
                        <span class="text">{{el($page,'previous')}}</span>
                        <span class="icon icon-menu icon-arrow-a icon-anim">
                <span class="arrow-right"></span>
              </span>
                    </a>
                </div>

                <!--slider pagination -->
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
    <!-- End of gallery -->
    @include('component.contact')
@endsection

@section('script')

@endsection
