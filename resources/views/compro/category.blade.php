<!doctype html>
<html class="no-js smooth-scroll-off" lang="en">
<?php $img = json_decode($kategoriTerpilih->lampiran); ?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>{{isset($informasi)?$informasi->nama_brand:''}} - {{$kategoriTerpilih->nama_kategori}}</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="{{$kategoriTerpilih->meta_description}}">

  <!-- Disable screen scaling-->
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <!-- <meta name="twitter:site" content="@twprofile">
  <meta name="twitter:creator" content="@twprofile">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="/img/bg-default.jpg"> -->

  <!-- Facebook Meta -->
  <meta property="og:url" content="{{url('/')}}">
  <meta property="og:title" content="{{isset($informasi)?$informasi->nama_brand:''}} - {{$kategoriTerpilih->nama_kategori}}">
  <meta property="og:description" content="{{$kategoriTerpilih->meta_description}}">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{\Storage::url($img[0]->path)}}">
  <meta property="og:image:secure_url" content="{{\Storage::url($img[0]->path)}}">
  <?php $path = explode('.',$img[0]->path); ?>
  <meta property="og:image:type" content="image/{{$path[count($path)-1]}}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

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
@media only screen and (max-width: 1023px){
  .top-spacer{
    padding-top:8rem;
  }
}
.page-item.active .page-link{
  background-color:#868686;
  border-color:#868686;
}
.page-item .page-link{
  color:#868686;
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
  <div class="page-cover" style="position:fixed;">
    <!-- Cover Background -->
    
    <div class="cover-bg pos-abs size-full bg-img" style="filter:grayscale(100%) blur(2px);" data-image-src="{{\Storage::url($img[0]->path)}}"></div>
    <div class="cover-bg pos-abs size-full bg-cover-gradientradial opacity-9"></div>

  </div>
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
    <nav id="navfull-menu" class="navfull navfull-menu navigation menu-behavior">
      <div class="navbar-group group-bg w-100">
        <p style="font-size: 36pt; font-weight: bold;">Apa yang anda ingin cari?</p>
        <form action="/cari" method="get">
        <Input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
        </form>
      </div>
    </nav>
  </header>
  <!-- END OF Header navigation of the page -->

  <!-- BEGIN OF page main content -->
  <main class="page-main fullpage-scroll anim-slide-scroll top-spacer" id="mainpage">
    <!--slider pagination -->
    
    </section>
    <!-- End of gallery -->
    <!-- Begin of featured-projects -->
    <section data-id="featured-projects" class="section section-page  fp-auto-height-responsive">

      <div class="section-margin anim">

        <div class="section-header align-x-center">
          <div class="width-large d-flex bd-highlight">
            <div class=" d-flex justify-content-end align-items-center">
              <h1 class="h-title font-title anim-1 d-inline pb-0">
                {{isset($subKategoriTerpilih)?$subKategoriTerpilih->nama_sub_kategori:$kategoriTerpilih->nama_kategori}}
              </h1>
            </div>
            <div class="navbar-toggler d-none d-lg-inline d-lg-flex justify-content-end align-items-center" style="flex-grow:1">
              <a id="menu-icon1" class="menu-toggler btn- btn btn-line-b py-3 py-md-0" href="#">
                <span class="bd-left text multiline t-upper fs-normal d-none d-md-flex">
                  <i class="icon fa fa-search" style="font-size: 20pt;"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="width-large m-0 p-0">
            <a href="/kategori?nama={{urlencode($kategoriTerpilih->nama_kategori)}}" class="text-white">{{$kategoriTerpilih->nama_kategori}} </a>
            @if(isset($subKategoriTerpilih))
            <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-right"></span>
            </span>  
            <a class="text-white" href="/kategori?nama={{urlencode($kategoriTerpilih->nama_kategori)}}&subkategori={{urlencode($subKategoriTerpilih->nama_sub_kategori)}}">{{$subKategoriTerpilih->nama_sub_kategori}}</a>
            @endif
          </div>
        </div>

        <div class="section-content align-x-center">
          <div class="c-wrapper width-large anim-3">
            <div class="row">

              @if(count($listProduk)>0)
              @foreach($listProduk as $produk)
              <!-- item -->
              <?php $img = json_decode($produk->lampiran); ?>
              
              <div class="mt-2 mt-md-4 col-12 col-md-4 col-lg-3 mb-3">
                <a  href="/produk?nama={{urlencode($produk->nama_produk)}}" class="text-white link-plain">
                <div class="item-grid-a">
                  <div class="item-img mt-4 mb-4 rounded-border">
                    <img class="img imgProduk" src="{{\Storage::url($img[0]->path)}}" alt="$img[0]->alt">
                  </div>
                  <div class="item-header">
                    <p class="min-height-product"><b class=" force-title">{{$produk->nama_produk}}</b></p>
                  </div>
                  <div class="item-content">

                    <p style="font-size: 12pt; min-height:80px">
                      {{$produk->meta_description}}
                    </p>
                    <a class="btn btn-line-a mt4" href="/produk?nama={{urlencode($produk->nama_produk)}}">
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
    <!-- End of featured-projects -->
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
  $(document).ready(function(){
    var imgWidth = $('.imgProduk').width();
    $('.imgProduk').height(imgWidth);
    $('#menu-icon1').on('click',function(){
      $('#menu-icon').click();
    });
  });
  </script>

</body>

</html>