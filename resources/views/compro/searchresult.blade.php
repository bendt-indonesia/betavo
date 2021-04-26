<!doctype html>
<html class="no-js smooth-scroll-off" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>{{isset($informasi)?$informasi->nama_brand:''}}</title>

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
  <meta property="og:description" content="{{isset($informasi)?$informasi->deskripsi_singkat:''}}">
  <meta property="og:type" content="website">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="./fonts/sourcesans/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ptserif/stylesheet.css">
  <link rel="stylesheet" href="./fonts/jost/stylesheet.css">
  <link rel="stylesheet" href="./fonts/poppins/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ionicons.min.css">
  <link rel="stylesheet" href="./fonts/font-awesome.min.css">

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="./css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/algoinc.css">

  <link rel="stylesheet" href="./js/vendor/swiper/swiper.min.css">
  <link rel="stylesheet" href="./js/vendor/vegas/vegas.min.css">
  <link rel="stylesheet" href="./js/vendor/fullpage/jquery.fullpage.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="./css/main.css">

  <!-- add alternative CSS rules here -->
  <link rel="stylesheet" href="./css/style-default.css">
  <link rel="stylesheet" href="./fonts/betavo/betavo_font.css">
  <link rel="stylesheet" href="./css/font-styling.css">
<style>
@media only screen and (min-width: 1280px){
  .ai-menu {
    position: relative;
    display: inline-block;
    color:white;
  }

  .ai-menu-content {
    display: none;
    position: absolute;
    min-width: 240px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    top:100%;
    LEFT:0;
    color:white;
  }
  .shadow{
    box-shadow:0 .1rem .5rem rgba(255,255,255,.15) !important;
  }

  .ai-menu:hover .ai-menu-content {
    display: block;
  }
}
@media only screen and (max-width: 1023px){
  .top-spacer{
    padding-top:8rem;
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
  <!-- <div class="page-cover"> -->
    <!-- Cover Background -->
    <!-- <div class="cover-bg pos-abs size-full bg-img" data-image-src="img/bg-default.jpg"></div> -->
    <!-- <div class="cover-bg pos-abs size-full bg-cover-gradientradial opacity-9"></div> -->

  <!-- </div> -->
  <!--END OF page cover -->

  <!-- BEGIN OF Header navigation of the page -->
  <!-- <header class="page-header loading-anim"> -->
    <!-- Begin of navbar-top -->

    <nav id="navbar-menu" class="navbar navbar-top bd-bottom fixed-top">
      <div class="navbar-group">
        <a href="/" class="navbar-brand logo-brand bd-right">
          <span class="logo">
            <img class="light-logo " src="./img/betavo-r.png" alt="Betavo Audio">
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
    <nav id="navfull-menu" class="navfull navfull-menu navigation menu-behavior">
      <div class="navbar-group group-bg w-100">
        <p style="font-size: 36pt; font-weight: bold;">Apa yang anda ingin cari?</p>
        <form action="/cari" method="get">
        <Input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
        </form>
      </div>
    </nav>

    <!-- End of navbar-top -->


  </header>
  <!-- END OF Header navigation of the page -->

  <!-- BEGIN OF page main content -->


  <main class="page-main top-spacer" id="mainpage">

    <section data-id="main-features" class="section section-page ">
      <div class="section-cover"></div>
      <div class="section-margin-off algo-mt-5" >
        <div class="section-header align-x-center">
          <div class="h-content width-medium">
            <h1 style="font-size:3rem">Hasil pencarian</h1>
          </div>
        </div>
        <!-- <hr class="mx-4" style="border:1px solid #f2f2f2" /> -->
        <div class="section-content mt-5 align-x-center" style="margin-bottom:15rem">
            <div class="container">
                <div class="row">
                @if($totalTemuan>0)
                @if(count($produk)>0)
                    @foreach($produk as $perProduk)
                    <?php $imgProduk = json_decode($perProduk->lampiran); ?>
                    <div class="col-12 col-md-4 col-lg-3 mt-3">
                        <a href="/produk?nama={{urlencode($perProduk->nama_produk)}}" style="color:black"  class="btn">
                        <div class="d-block"><img src="{{\Storage::url($imgProduk[0]->path)}}" alt="{{$imgProduk[0]->alt}}" class="img-fluid" /></div>
                        <div class="d-block text-white">{{$perProduk->nama_produk}}</div>
                        </a>
                    </div>
                    @endforeach
                @endif
                @if(count($kategori)>0)
                @foreach($kategori as $perKategori)
                <?php $imgKategori = json_decode($perKategori->lampiran); ?>
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori?nama={{urlencode($perKategori->nama_kategori)}}" style="color:black"  class="btn">
                    <div class="d-block"><img src="{{\Storage::url($imgKategori[0]->path)}}" alt="{{$imgKategori[0]->alt}}" class="img-fluid" /></div>
                    <div class="d-block  text-white">{{$perKategori->nama_kategori}}</div>
                    </a>
                </div>
                @endforeach
                @endif
                @if(count($subKategori)>0)
                @foreach($subKategori as $perSubKategori)
                <?php $imgSubKategori = json_decode($perSubKategori->lampiran); ?>
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori?nama={{urlencode($perSubKategori->nama_kategori)}}&subkategori={{urlencode($perSubKategori->nama_sub_kategori)}}" style="color:black" class="btn">
                    <div class="d-block"><img src="{{\Storage::url($imgSubKategori[0]->path)}}" alt="{{$imgSubKategori[0]->alt}}" class="img-fluid" /></div>
                    <div class="d-block  text-white">{{$perSubKategori->nama_sub_kategori}}</div>
                    </a>
                </div>
                @endforeach
                @endif
                @else
                <div class="col-md-12">
                <p>Tidak ada data yang relevan.</p>
                </div>
                @endif
                </div>
            </div>
        </div>
      </div>
    </section>


    </section>
    <!-- End of about-us -->
    <div class="section section-footer-b mt-5">
    <div class="section-footer section-footer-a anim">
        <!-- begin of home footer -->
      <div class="home-footer width-medium">
        <div class="h-left anim-2">
          <div>
            <a href="#" class="d-block">
              <img class="light-logo" style="width:180px;" src="./img/betavo-r.png" alt="Logo">
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
    </div>
  </main>
  <!-- END OF page main content -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="./js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="./js/vendor/vegas/vegas.min.js"></script>
  <script src="./js/vendor/swiper/swiper.min.js"></script>

  <script src="./js/vendor/fullpage/scrolloverflow.min.js"></script>
  <script src="./js/vendor/fullpage/jquery.fullpage.min.js"></script>

  <!-- Form script -->
  <script src="./js/vendor/form/jqueryvalidation.min.js"></script>
  <script src="./js/vendor/form/form_script.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.js"></script>

  <!-- Javascript main files -->
  <script src="./js/main.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      cssMode: true,
      autoplay: {
			delay: 3000,
		  },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
</body>
</html>
