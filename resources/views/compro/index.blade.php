<!doctype html>
<html class="no-js smooth-scroll-off" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>{{isset($informasi)?$informasi->nama_brand:'Home page'}}</title>




  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description"
    content="{{isset($informasi)?$informasi->deskripsi_singkat:''}}">

  <!-- Disable screen scaling-->
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Facebook Meta -->
  <meta property="og:url" content="{{url('/')}}">
  <meta property="og:title" content="{{isset($informasi)?$informasi->nama_brand:''}}">
  <meta property="og:description" content="isset($informasi)?$informasi->deskripsi_singkat:''}}">
  <meta property="og:type" content="website">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="./fonts/sourcesans/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ptserif/stylesheet.css">
  <link rel="stylesheet" href="./fonts/jost/stylesheet.css">
  <link rel="stylesheet" href="./fonts/poppins/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ionicons.min.css">
  <link rel="stylesheet" href="./fonts/font-awesome.min.css">
  <link rel="stylesheet" href="./css/pageloader.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/algoinc.css">
  <link rel="stylesheet" href="./js/vendor/swiper/swiper.min.css">
  <link rel="stylesheet" href="./js/vendor/vegas/vegas.min.css">
  <link rel="stylesheet" href="./js/vendor/fullpage/jquery.fullpage.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/style-default.css">
  <link rel="stylesheet" href="./fonts/betavo/betavo_font.css">
  <link rel="stylesheet" href="./css/font-styling.css">
  <style>


@media only screen and (min-width: 1280px){
  .ai-menu {
    position: relative;
    display: inline-block;
  }

  .ai-menu-content {
    display: none;
    position: absolute;
    min-width: 240px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    top:100%;
    LEFT:0;
    background-color:black;
  }

  .ai-menu:hover .ai-menu-content {
    display: block;
  }
}
  </style>

</head>

<body id="menu" class="body-page">

  <!-- Page Loader : just comment these lines to remove it -->
  <div class="page-loader" id="page-loader">
    <div>
      <div class="icon ion-spin"></div>
      <p>loading</p>
    </div>
  </div>

  <!-- BEGIN OF page cover -->

  <!--END OF page cover -->

  <!-- BEGIN OF Header navigation of the page -->
  <header class="page-header loading-anim">
    <!-- Begin of navbar-top -->
    <nav id="navbar-menu" class="navbar navbar-top bd-bottom fixed-top">
      <div class="navbar-group">
        <a href="/" class="navbar-brand logo-brand bd-right">
          <span class="logo">
            <img class="light-logo " src="./img/betavo.png" alt="Betavo Audio">
          </span>
        </a>
          <button class="navbar-toggler d-lg-none align-items-center navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon border border-white p-1"></span> -->
            <img src="/img/open-menu.svg" class="img-fluid humberg-btn">
          </button>
        <div class="collapse navbar-collapse d-lg-flex" id="navbarNav">
          <ul class="navbar-nav nav-menu flex-column flex-lg-row align-items-start">
            @foreach($produkKategori as $item)
            <li class="nav-item fs-normal ai-menu  mx-0 px-0">
                <a href="/kategori?nama={{urlencode($item->nama_kategori)}}" class="">{{$item->nama_kategori}}</a>
                <div class="ai-menu-content">
                @foreach($produkSubKategori as $subkategori)
                @if($item->id == $subkategori->id_kategori)
                  <a href="/kategori?nama={{urlencode($item->nama_kategori)}}&subategori={{urlencode($subkategori->nama_sub_kategori)}}" class="py-3 d-none d-lg-block ">{{$subkategori->nama_sub_kategori}}</a>
                @endif
                @endforeach
                </div>
            </li>
            @endforeach
            <li class="nav-item fs-normal ai-menu d-block d-lg-none  mx-0 px-0">

              <hr class="border border-white" />
              <div class="navbar-group group-bg w-100">

                <p>Apa yang anda ingin cari?</p>
                <form action="/cari" method="get">
                <Input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
                </form>
              </div>
              <div class="w-100 d-block mx-0 px-0 d-lg-none mt-5">
                <ul class="icons mx-0 px-0">
                  @if(isset($informasi))
                      @if(isset($informasi->link_tokopedia))
                        <li class="d-inline mr-3"><a href="{{$informasi->link_tokopedia}}"  class="d-inline"><img src="/img/Betavo_Tokopedia.png" style="width:2rem;height:2rem" alt="tokopedia - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
                      @endif
                      @if(isset($informasi->link_shopee))
                        <li class="d-inline mr-3"><a href="{{$informasi->link_shopee}}" class="d-inline"><img src="/img/Betavo_Shopee.png" style="width:2rem;height:2rem" alt="shopee - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
                      @endif
                      @if(isset($informasi->link_bukalapak))
                        <li class="d-inline mr-3"><a href="{{$informasi->link_bukalapak}}" class="d-inline"><img src="/img/Betavo_Bukalapak.png" style="width:2rem;height:2rem" alt="bukalapak - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
                      @endif
                      @if(isset($informasi->link_facebook))
                      <li class="d-inline mr-3"><a href="{{$informasi->link_facebook}}" class="d-inline"> <img src="/img/facebook.png" style="width:2rem;height:2rem" alt="faecbook - {{$informasi->nama_brand}}" class="img-fluid link-nav icon05"></i></a></li>
                      @endif
                      @if(isset($informasi->link_instagram))
                      <li class="d-inline mr-3"><a href="{{$informasi->link_instagram}}" class="d-inline"><img src="/img/ig.png" style="width:2rem;height:2rem" alt="instagram - {{$informasi->nama_brand}}" class="img-fluid  link-nav icon05"></i></a></li>
                      @endif
                  @endif
                </ul>
            </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="navbar-group group-right">
        <div class="navbar-social d-none d-lg-block">
          <ul class="icons">
            @if(isset($informasi))
            @if(isset($informasi->link_tokopedia))
              <li><a href="{{$informasi->link_tokopedia}}" class="h-100 d-flex align-items-center"><img src="/img/Betavo_Tokopedia.png" alt="tokopedia - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
            @endif
            @if(isset($informasi->link_shopee))
              <li><a href="{{$informasi->link_shopee}}" class="h-100 d-flex align-items-center"><img src="/img/Betavo_Shopee.png" alt="shopee - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
            @endif
            @if(isset($informasi->link_bukalapak))
              <li><a href="{{$informasi->link_bukalapak}}" class="h-100 d-flex align-items-center"><img src="/img/Betavo_Bukalapak.png" alt="bukalapak - {{$informasi->nama_brand}}" class="img-fluid link-nav"> </a></li>
            @endif
            @if(isset($informasi->link_facebook))
            <li><a href="{{$informasi->link_facebook}}" class="h-100 d-flex align-items-center"> <img src="/img/facebook.png" alt="faecbook - {{$informasi->nama_brand}}" class="img-fluid link-nav icon05"></i></a></li>
            @endif
            @if(isset($informasi->link_instagram))
            <li><a href="{{$informasi->link_instagram}}" class="h-100 d-flex align-items-center"><img src="/img/ig.png" alt="instagram - {{$informasi->nama_brand}}" class="img-fluid  link-nav icon05"></i></a></li>
            @endif
            @endif
          </ul>
        </div>
        <div class="navbar-toggler">
          <a id="menu-icon" class="menu-toggler btn- btn btn-line-b py-3 py-md-0 d-none d-lg-inline" href="#">

            <span class="bd-left text multiline t-upper fs-normal d-none d-md-flex">
              <i class="icon fa fa-search link-nav"></i>
              <!-- <span class="line">Me</span>
              <span class="line">Nu</span> -->
            </span>
          </a>
        </div>
      </div>
    </nav>
    <!-- End of navbar-top -->
    <!-- Begin of navbar-sidebar -->
    <nav class="navbar navbar-sidebar ">
      <div class="navbar-group">
        <div class="navbar-collapse">
          <ul id="sidebar-menu" class="navbar-nav nav-menu">
            <li class="nav-item active" data-menuanchor="home">
              <a href="#home">
                <span class="icon ion-home "></span>
                <span class="text ">Home</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="about">
              <a href="#about">
                <span class="icon ion-android-bulb"></span>
                <span class="text ">About</span>
              </a>
            </li>
            <li class="nav-item" data-menuanchor="gallery">
              <a href="#gallery">
                <span class="icon ion-grid"></span>
                <span class="text ">Categories</span>
              </a>
            </li>
            <!-- <li class="nav-item" data-menuanchor="subscribe">
              <a href="#subscribe">
                <span class="icon ion-android-mail"></span>
                <span class="text">Subscribe</span>
              </a>
            </li> -->
            <li class="nav-item" data-menuanchor="contact">
              <a href="#contact">
                <span class="icon ion-android-call"></span>
                <span class="text ">Contact</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of navbar-sidebar -->
    <!-- Begin of navfull-menu -->
    <nav id="navfull-menu" class="navfull navfull-menu navigation menu-behavior">
      <div class="navbar-group group-bg w-100">
        <h2 class="h-title w-100">Apa yang anda ingin cari?</h2>
        <form action="/cari" method="get">
        <Input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
        </form>
      </div>
    </nav>
    <!-- End of navfull-menu -->

  </header>
  <!-- END OF Header navigation of the page -->

  <!-- BEGIN OF page main content -->
  <main class="page-main fullpage-scroll anim-slide-scroll " id="mainpage">

    <!-- Begin of home -->
    <section data-id="home" class="section section-home header-home">
    <div class="page-cover" data-color="">
    <!-- Cover Background -->
    <div class="cover-bg pos-abs size-full bg-img" data-image-src="img/background_home-min.jpg" style="background-image: url(&quot;img/background_home-min.jpg&quot;); background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
    <div class="cover-bg pos-abs size-full bg-cover-gradientradial opacity-9"></div>

    </div>
      <div class="section-title title-right">
      </div>
      <div class="section-content align-x-center align-y-center anim">
        <div class="width-medium">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">
              <div class="home-left content-text">
                <!-- NOTE:QC minta hilangkan brand identity
                  <h1 class="h-title font-title fw-normal anim-3 " style="font-size:3rem"></span></h1>
                -->
                <div class="text mb-5 anim-4">
                  <p>{{isset($informasi->deskripsi_singkat)?$informasi->deskripsi_singkat:''}}</p>
                </div>
                <div class="btns-group anim-5">
                  <a class="btn btn-line-a" href="#gallery">
                    <span class="text ">Produk kami</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
                      <span class="arrow-right"></span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex min-h-full">
            </div>
          </div>

        </div>
      </div>
      <div class="section-footer section-footer-a anim">
        <!-- begin of home footer -->
        <!-- <div class="home-footer width-medium">
          <div class="h-left anim-2">
            <div>
              <a href="#" class="d-block">
                <img class="light-logo" style="width:180px;" src="./img/betavo.png" alt="Logo">
              </a>
              <b class="copy d-block opacity-5 text-left">&copy; {{\Carbon\Carbon::now()->year}}</b>

            </div>

          </div>
          <div class="h-right anim-3">
            <p class="text-line"><a href="tel:{{isset($informasi)?$informasi->nomor_telpon:''}}">{{isset($informasi->nomor_telpon)?$informasi->nomor_telpon:''}}</a></p>
            <p class="text-line"><a href="mailto:{{isset($informasi->email)?$informasi->email:''}}">{{isset($informasi->email)?$informasi->email:''}}</a></p>
          </div>
        </div> -->
        <!-- end of home footer -->

        <div class="footer-right mr-4">
          <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
            <span class="text">Scroll</span>
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
      <!-- QC minta disamakan dengan bacground atas -->

          <div class="cover-bg pos-abs size-full bg-img w-100 h-100" data-image-src="img/background_home-min.jpg" style="background-image: url(&quot;img/background_home-min.jpg&quot;); background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
          <div class="cover-bg pos-abs size-full w-100 h-100 bg-cover-gradientradial opacity-9"></div>


      <div class="section-margin anim">
        <!-- begin of .section-header -->
        <div class="section-header align-x-center">
          <div class="h-content width-medium">
            <h2 class="h-title font-title anim-1">
              About
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
                  <p>
                    {{isset($informasi->deskripsi_lengkap)?$informasi->deskripsi_lengkap:''}}
                  </p>
                </div>
              </div>

            </div>

            <div class="btns-group mt-5">
              <a class="btn btn-line-a anim-4" href="#gallery">
                <span class="text  ">Produk kami</span>
                <span class="icon icon-menu icon-arrow-a icon-anim">
                  <span class="arrow-right"></span>
                </span>
              </a>
            </div>

          </div>
        </div>
        <!-- end of .section-content -->
      </div>

      <div class="section-footer section-footer-a  d-none d-lg-block ">
        <div class="footer-right mr-4">
          <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
            <span class="text">Scroll</span>
            <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-down"></span>
            </span>
          </a>
        </div>
      </div>
    </section>
    <!-- End of about -->
    <!-- Begin of team -->

    <!-- End of team -->
    <!-- Begin of gallery -->
    <section data-id="gallery" class="section section-slide fullsize-slide section-page fp-auto-height-responsive">
      <div class="slide-size">
        <div class="section-slides slider-b swiper-container anim">
          <!-- slider wrapper -->
          <div class="swiper-wrapper slider-wrapper">
            <!-- .slide-item -->
            @foreach($produkKategori as $kategori)
            <?php $img = json_decode($kategori->lampiran); ?>
            <div class="swiper-slide slide-item">
              <div class="slide-b slide-anim fullscreen-slide content-top">
                <div class="slide-bg fade-1" style="filter:grayscale(100%) brightness(60%);">
                  <img class="img-block" alt="$img[0]->alt" src="{{\Storage::url($img[0]->path)}}">
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

                            <p>{{$kategori->meta_description}}</p>
                            <a class="btn btn-line-a mt-5" href="/kategori?nama={{$kategori->nama_kategori}}">
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
            <!-- end of .slide-item -->

          </div>

          <!-- slider arrows -->
          <div class="slider-arrow">
            <a class="slider-prev btn btn-line-b slider-btn-top d-none d-lg-inline" href="#">
              <span class="icon icon-menu icon-arrow-a icon-anim">
                <span class="arrow-left"></span>
              </span>
              <span class="text">Previous</span>
            </a>
            <a class="slider-next btn btn-line-b d-none d-lg-inline" href="#">
              <span class="text">Next</span>
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
            <span class="text">Scroll</span>
            <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-down"></span>
            </span>
          </a>
        </div>
      </div>

    </section>
    <!-- End of gallery -->

    <!-- Begin of subscribe -->
    <!-- <section data-id="subscribe" class="section section-page fp-auto-height-responsive">
      <div class="section-cover"></div>
      <div class="section-title title-right">
        <h3 class="title title-anim">
          <span class="text-stroke">News</span>
        </h3>
      </div>

      <div class="section-margin anim"> -->

        <!-- begin of .section-header -->
        <!-- <div class="section-header align-x-center">
          <div class="h-content width-medium">
            <h2 class="h-title font-title anim-1">
              Subscribe
            </h2>
          </div>
        </div> -->
        <!-- end of .section-header -->

        <!-- <div class="section-content align-x-center">
          <div class="c-wrapper width-medium">
            <div class="row no-gutters">
              <div class="col-12 col-lg-8">

                <div class="form-container-signup mt-btn"> -->
                  <!-- BEGIN send_email_form -->
                  <!-- <form class="send_email_form form-container" method="post" action="ajaxserver/serverfile.php"
                    novalidate="novalidate">
                    <div class="form-success-gone text-wrapper anim-2">
                      <p>Do not miss any update, register you email address to our newsletter to receive
                        our
                        latest news :</p>
                    </div>
                    <div class="form-input mt-3 mt-lg-5 anim-3">
                      <div class="row form-success-gone">
                        <div class="col-12 col-md-8 col-lg-8 form-group-line">
                          <div class="form-group"> -->
                            <!-- <label for="reg-email">Email Address</label> -->
                            <!-- <input id="reg-email" name="email"
                              class="form-control-line form-control-white form-success-clean" type="email" required=""
                              placeholder="your@email.address" data-validation-type="email" aria-required="true">
                          </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                          <div class="form-group mt-0 mb-md-0">
                            <button id="submit-email" name="submit_email" class="btn btn-line-a ">
                              <span class="text text-uppercase">Subscribe</span>
                              <span class="icon icon-menu icon-arrow-a icon-anim">
                                <span class="arrow-right"></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <p class="gone form-text-feedback form-success-visible">
                          Your email has been registred, thank you.
                        </p>
                      </div>
                    </div> -->
                  <!-- </form> END send_email_form -->
                <!-- </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-footer"></div>
    </section> -->
    <!-- End of subscribe -->


    <!-- Begin of contact -->
    <section data-id="contact" class="section section-page section-contact fp-auto-height-responsive">
      <div class="section-cover"></div>
      <div class="section-title title-right">
        <h3 class="title title-anim">
          <!-- <span class="text-stroke">Contact</span> -->
        </h3>
      </div>

      <div class="section-margin anim">
        <div class="section-header align-x-center">
          <div class="h-content width-medium">
            <h2 class="h-title font-title anim-1  ">
              Kontak kami
            </h2>
          </div>
        </div>
        <div class="section-content align-x-center">
          <div class="c-wrapper width-medium">
            <div class="row">
              <div class="col col-12 col-lg-6">
                <div class="content-text anim-2 mb-5">
                  <p>
                    Untuk informasi dan kemitraan lebih lanjut, silakan kirim pesan kepada kami
                  </p>
                  <p>
                    <a class="contact-email normalize-font" href="mailto:{{isset($informasi->email)?$informasi->email:''}}">{{isset($informasi->email)?$informasi->email:''}}</a>
                  </p>
                  <p>
                    <a class="contact-email normalize-font" href="tel:{{isset($informasi->nomor_telpon)?$informasi->nomor_telpon:''}}"><span class="contact-phone">{{isset($informasi->nomor_telpon)?$informasi->nomor_telpon:''}}</span></a>
                  </p>
                  <p>
                    <span class="contact-address">
                    {{isset($informasi->lokasi)?$informasi->lokasi:''}}
                    </span>
                  </p>
                </div>
              </div>
              <div class="col col-12 col-lg-6">
                <!-- Message form-container -->
                <div class="form-container form-container-contact anim-4">
                  <form class="send_message_form message form" method="post" id="sendMessageToUs">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group name">
                          <input id="mes-name" name="name" type="text" placeholder="Masukan nama anda"
                            class="form-control form-control-outline input-full thick form-success-clean" required
                            aria-required="true">
                        </div>
                        <div class="form-group email">
                          <input id="mes-email" type="email" placeholder="Email address" name="Masukan email anda"
                            class="form-control form-control-outline input-full thick form-success-clean" required
                            aria-required="true">
                        </div>
                        <div class="form-group no-border">
                          <textarea id="mes-text" placeholder="Your message ..." name="Apa pesan yang ingin anda kirim?"
                            class="form-control form-control-outline thick form-success-clean" required
                            aria-required="true"></textarea>

                        </div>
                      </div>
                      <div class="col-12">
                        <button type="button" id="kirimPesan" class="btn btn-line-b email_b" name="submit_message">
                          <span class="text text-uppercase">Kirim sekarang</span>
                          <span class="icon icon-menu icon-arrow-a icon-anim">
                            <span class="arrow-right"></span>
                          </span>
                        </button>
                      </div>
                      <div>
                        <p class="form-text-feedback col-12 form-success-visible" id="sendMessageResponse">

                        </p>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- End of Message form-container -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-footer section-footer-a anim">
        <!-- begin of home footer -->
        <div class="home-footer width-medium">
          <div class="h-left anim-2">
            <div>
              <a href="#" class="d-block">
                <img class="light-logo" style="width:180px;" src="./img/betavo.png" alt="Logo">
              </a>
              <b class="copy d-block opacity-5 text-left">&copy; {{\Carbon\Carbon::now()->year}}</b>

            </div>

          </div>
          <div class="h-right anim-3">
            <p class="text-line"><a href="tel:{{isset($informasi)?$informasi->nomor_telpon:''}}">{{isset($informasi->nomor_telpon)?$informasi->nomor_telpon:''}}</a></p>
            <p class="text-line"><a href="mailto:{{isset($informasi->email)?$informasi->email:''}}">{{isset($informasi->email)?$informasi->email:''}}</a></p>
          </div>
        </div>
        <!-- end of home footer -->


      </div>
    </section>
    <!-- End of contact -->

  </main>
  <!-- END OF page main content -->

  <!-- scripts -->
  <script src="./js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./js/vendor/vegas/vegas.min.js"></script>
  <script src="./js/vendor/swiper/swiper.min.js"></script>
  <script src="./js/vendor/fullpage/scrolloverflow.min.js"></script>
  <script src="./js/vendor/fullpage/jquery.fullpage.min.js"></script>
  <script src="./js/vendor/form/jqueryvalidation.min.js"></script>
  <script src="./js/vendor/form/form_script.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.js"></script>
  <script src="./js/main.js"></script>

  <script>
  $(document).ready(function(){
    $('#kirimPesan').on('click',function(){
      var validator = $( "#sendMessageToUs" ).validate();
      if( validator.element( "#mes-name" ) && validator.element( "#mes-email" ) && validator.element( "#mes-text" )){
        grecaptcha.ready(function() {
          grecaptcha.execute('6LfG-rEZAAAAAG9FFJP2yCW7w8rldipMKLB2jNSL', {action: 'submit'}).then(function(token) {
            console.log(token);
            $.ajax({
              type: "POST",
              url: "/kirimpesan",
              data: {
                "_token": "{{ csrf_token() }}",
                "name": $('#mes-name').val(),
                "email":$('#mes-email').val(),
                "message":$('#mes-text').val(),
              },
            }).done(function(result, statusText, xhr) {
              $('#sendMessageResponse').html('Terima kasih pesan anda telah kami terima.');
            }).fail(function(result , statusText, xhr) {
              $('#sendMessageResponse').html('Gagal mengirim, silahkan coba beberapa saat lagi.');
            });

          });
        });

      }
    });
  });
  </script>

</body>

</html>
