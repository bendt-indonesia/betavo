<!doctype html>
<html class="no-js smooth-scroll-off" lang="en">

<?php $img = isset($produkTerpilih->lampiran)?json_decode($produkTerpilih->lampiran):array(); ?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>{{isset($informasi)?$informasi->nama_brand:''}} - {{isset($produkTerpilih)?$produkTerpilih->nama_produk:''}}</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description"
    content="{{isset($produkTerpilih)?$produkTerpilih->meta_description:''}}">

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
  <meta property="og:title" content="{{isset($informasi)?$informasi->nama_brand:''}} - {{isset($produkTerpilih)?$produkTerpilih->nama_produk:''}}">
  <meta property="og:description" content="{{isset($produkTerpilih)?$produkTerpilih->meta_description:''}}">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{isset($img[0])?$img[0]->path:''}}">
  <meta property="og:image:secure_url" content="{{isset($img[0])?$img[0]->path:''}}">
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
  }
  
  .ai-menu-content {
    display: none;
    position: absolute;
    min-width: 240px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    top:100%;
    LEFT:0;
    background-color:#000;
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

.modalImg {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100vh; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Add Animation */
.modal-content {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
@media only screen and (min-width: 1600px){
  .container{
    max-width: 1540px !important;
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
            <li class="nav-item fs-normal ai-menu mx-0 px-0">
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
          </div>
        </div>
        <div class="section-content mt-5 mb-5 align-x-center">
        <div class="container">
          <div class="row">
            <div class="col-12 p-0">
            {{$produkTerpilih->nama_kategori}} 
            <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-right"></span>
            </span>  
            {{$produkTerpilih->nama_sub_kategori}}
            <hr class="mt-2"/>
            </div>
          </div>
        </div>
        
          <div class="container">
            <div class="row">
              <div class="p-0 col-12 col-md-6">
                <div class="swiper-container">
                  <div class="swiper-wrapper d-flex align-items-center">
                  @if(isset($produkTerpilih->youtube))
                  <div class="swiper-slide w-100 px-0" id="youtubeWrapper"><div style="position:absolute;width:100%;height:100%" id="showYoutubeModal"></div>{!! $produkTerpilih->youtube !!}</div>
                  @endif
                    @foreach($img as $i)
                    <div class="swiper-slide"><img src="{{\Storage::url($i->path)}}" alt="{{$i->alt}}" class="img-fluid zoomableImg px-lg-5" /></div>
                    @endforeach
                    
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next p-md-4" style="filter:grayscale(100%)"></div>
                  <div class="swiper-button-prev p-md-4" style="filter:grayscale(100%)"></div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination" ></div>
                </div>
              </div>
              <div class="p-0 p-md-4 col-12 col-md-6">
              <hr class="m-0 mt-4 mb-4"/>
                <h1 class="h-title">
                {{ isset($produkTerpilih)?$produkTerpilih->nama_produk:'' }}
                </h1>
                <hr class="m-0 mt-4 mb-4"/>
                <div class="d-block">
                {!! isset($produkTerpilih)?$produkTerpilih->deskripsi:'Tidak ada deskripsi mengenai produk ini' !!}
                </div>
                <div class="d-block mt-4 mb-4">
                @if(isset($produkTerpilih->link_tokopedia))
                <a class="mx-1 text-white" href="{{$produkTerpilih->link_tokopedia}}"><img src="/img/tokped.png" alt="tokopedia - {{$produkTerpilih->nama_produk}}" style="height:42px;width:42px"></a>
                @endif
                @if(isset($produkTerpilih->link_bukalapak))
                <a class="mx-1 text-white" href="{{$produkTerpilih->link_bukalapak}}"><img src="/img/bukalapak.png" alt="bukalapak - {{$produkTerpilih->nama_produk}}" style="height:42px;width:42px"></a>
                @endif
                @if(isset($produkTerpilih->link_shopee))
                <a class="mx-1 text-white" href="{{$produkTerpilih->link_shopee}}"><img src="/img/shopee.png" alt="shopee - {{$produkTerpilih->nama_produk}}" style="height:42px;width:42px"></a>
                @endif
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

    <section data-id="main-features" class="section section-page ">
      <div class="section-cover"></div>
      <div class="section-margin-off algo-mt-5" >
        <div class="section-header align-x-center">
          <div class="h-content width-medium">
            
          </div>
        </div>
        <hr class="mx-4" style="height:1px;background:grey;" />
        <div class="section-content mt-5 mb-5 align-x-center">
          <div class="container">
            <div class="row">
              <div class="col-12 p-0">
                <h2>Produk serupa dari Betavo Audio</h2>
              </div>
              @foreach($produkSerupa as $produk)
              <?php $imgProdukSerupa = json_decode($produk->lampiran); ?>
              <div class="col-md-3 p-0">
                <a href="/produk?nama={{urlencode($produk->nama_produk)}}" style="color:black">
                <div class="d-block"><img src="{{\Storage::url($imgProdukSerupa[0]->path)}}" alt="{{$imgProdukSerupa[0]->alt}}" class="img-fluid" /></div>
                <div class="d-block text-white">{{$produk->nama_produk}}</div>
                </a>
              </div>
              @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End of about-us -->
    <div class="section section-footer-b" style="margin-top:15rem">
    <div class="section section-footer section-footer-a anim">
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
    </div>
  </main>
  <!-- img preview -->
  <div id="modalImagePreview" class="modalImg">
    <span class="close" id="imgPrevClose">&times;</span>
    <div class="w-100 d-flex justify-content-center">
      <img class="modal-content" id="imgPreview">
    </div>
    <div id="caption"></div>
  </div>
  <!-- END OF page main content -->

  <!-- youtube preview -->
  @if(isset($produkTerpilih->youtube))
  <div id="youtubePreview" class="modalImg">
    <span class="close" id="youtubeClose">&times;</span>
    <div class="swiper-slide d-flex justify-content-center align-items-center" id="youtubeWrapperPreview"></div>
    <div id="caption"></div>
  </div>
  @endif
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
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efe7e1082708800123b4106&product=inline-share-buttons&cms=sop' async='async'></script>
  <script>

  var youtube = '{!! $produkTerpilih->youtube !!}';
  
  $(document).ready(function(){
    $('#youtubeWrapper').find('iframe').addClass('w-100');
    $("#showYoutubeModal").on('click',function(){
      $('#youtubeWrapperPreview').append(youtube);
      $('#youtubePreview').show();
      swiper.autoplay.stop();
      $('#youtubeClose').on('click',function(){
      $('#youtubePreview').hide();
      $('#youtubeWrapperPreview').empty();
      swiper.autoplay.start();
      
    });
    });
    // var modal = document.getElementById("modalImagePreview");

    // // Get the image and insert it inside the modal - use its "alt" text as a caption
    // var img = document.getElementById("zoomableImg");
    // var modalImg = document.getElementById("imgPreview");
    // img.onclick = function(){
    //   modal.style.display = "block";
    //   modalImg.src = this.src;
    // }
    // var span = document.getElementById("imgPrevClose");
    // span.onclick = function() { 
    //   modal.style.display = "none";
    // }
    $('.zoomableImg').on('click',function(){
      console.log("zoom");
      swiper.autoplay.stop();
      $('#modalImagePreview').show();
      var newWidth = $('#modalImagePreview').width() * 0.95;
      var newheight = $('#modalImagePreview').height() * 0.95;
      
      $('#imgPreview').attr('src',$(this).attr('src'));
      $('#imgPreview').width(newWidth>newheight?newheight:newWidth);
      $('#imgPreview').height(newWidth>newheight?newheight:newWidth);
      
    });
    $('#imgPrevClose').on('click',function(){
      $('#modalImagePreview').hide();
      swiper.autoplay.start();
    });
  });
    var swiper = new Swiper('.swiper-container', {
      loop:true,
      cssMode: false,
      autoplay: {
			delay: 3000,
      },
      disableOnInteraction: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
      centeredSlides:true,
    });
    swiper.on('slideChange', function () {
      if(swiper.realIndex==0){
        var wrapperWidth = $('#youtubeWrapper').width();
        console.log(-1*wrapperWidth);
        swiper.setTranslate(-1*wrapperWidth);
      }
    });

    $('.swiper-button-next').on('click',function(){
      swiper.autoplay.start();
      console.log("next");
    });
    $('.swiper-button-prev').on('click',function(){
      swiper.autoplay.start();
      console.log("prev");
    });
    
  </script>
</body>
</html>