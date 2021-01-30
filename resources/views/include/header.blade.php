<!-- BEGIN OF Header navigation of the page -->
<header class="page-header loading-anim">
    <!-- Begin of navbar-top -->
    <nav id="navbar-menu" class="navbar navbar-top bd-bottom fixed-top">
        <div class="navbar-group">
            <a href="/" class="navbar-brand logo-brand bd-right">
          <span class="logo">
            <img class="light-logo " src="{{asset('img/betavo.png')}}" alt="Betavo Audio">
          </span>
            </a>
            <div id="menu-icon-wrapper" class="menu-icon-wrapper navbar-toggler d-xl-none align-items-center navbar-dark" style="visibility: visible;"
                 data-toggle="collapse"
                 data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                 aria-label="Toggle navigation"
            >
                <svg width="1000px" height="1000px">
                    <path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800" style="stroke-dashoffset: 5803.15; stroke-dasharray: 2901.57, 2981.57, 240;"></path>
                    <path id="pathB" d="M 300 500 L 700 500" style="stroke-dashoffset: 800; stroke-dasharray: 400, 480, 240;"></path>
                    <path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200" style="stroke-dashoffset: 6993.11; stroke-dasharray: 3496.56, 3576.56, 240;"></path>
                </svg>
                <button id="menu-icon-trigger" class="menu-icon-trigger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></button>
            </div>
            <div class="collapse navbar-collapse d-xl-flex" id="navbarNav">
                <ul class="navbar-nav nav-menu flex-column flex-lg-row align-items-start">
                    @foreach(stores('category') as $item)
                        <li class="nav-item fs-normal ai-menu mx-0 px-0">
                            <a
                                {{-- href="{{route('category',['cat'=>$item->slug])}}" --}}
                               href="#"
                               class="ai-menu-a">{{$item->nama_kategori}}</a>
                            <div class="ai-menu-content">
                                @foreach($item->produk_sub_kategori as $subkategori)
                                    @if($item->is_active)
                                        <a href="{{route('category',['cat'=>$item->slug,'sub'=>$subkategori->slug])}}"
                                           class="py-3 d-lg-block ">{{$subkategori->nama_sub_kategori}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                    <li class="nav-item fs-normal ai-menu  mx-0 px-0">
                        <a href="{{route('contact')}}" class="">Hubungi</a>
                    </li>
                    <li class="nav-item fs-normal ai-menu d-block d-lg-none  mx-0 px-0">

                        <hr class="border border-white"/>
                        <div class="navbar-group group-bg w-100">

                            <p class="mb-0">Apa yang anda ingin cari?</p>
                            <form action="/cari" method="get">
                                <input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
                            </form>
                        </div>
                        <div class="w-100 d-block mx-0 px-0 d-lg-none mt-3">
                            <ul class="icons mx-0 px-0">

                                @if(conval('tokopedia'))
                                    <li class="d-inline mr-3">
                                        <a href="{{conval('tokopedia')}}" class="d-inline">
                                            <img
                                                src="{{asset('/img/Betavo_Tokopedia.png')}}"
                                                class="img-fluid link-nav icon-menu-header">
                                        </a>
                                    </li>
                                @endif

                                @if(conval('shopee'))
                                    <li class="d-inline mr-3">
                                        <a href="{{conval('shopee')}}"
                                           class="d-inline"><img src="{{asset('/img/Betavo_Shopee.png')}}"
                                           class="img-fluid link-nav icon-menu-header">
                                        </a>
                                    </li>
                                @endif

                                @if(conval('bukalapak'))
                                    <li class="d-inline mr-3">
                                        <a href="{{conval('bukalapak')}}"
                                           class="d-inline"><img src="{{asset('/img/Betavo_Bukalapak.png')}}"
                                           class="img-fluid link-nav icon-menu-header">
                                        </a>
                                    </li>
                                @endif

                                @if(conval('facebook'))
                                    <li class="d-inline mr-3">
                                        <a href="{{conval('facebook')}}"
                                           class="d-inline"><img src="{{asset('/img/facebook.png')}}"
                                           class="img-fluid link-nav icon-menu-header">
                                        </a>
                                    </li>
                                @endif

                                @if(conval('instagram'))
                                    <li class="d-inline mr-3">
                                        <a href="{{conval('instagram')}}"
                                           class="d-inline"><img src="{{asset('/img/ig.png')}}"
                                           class="img-fluid link-nav icon-menu-header">
                                        </a>
                                    </li>
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
                    @if(conval('tokopedia'))
                        <li>
                            <a href="{{conval('tokopedia')}}" class="h-100 d-flex align-items-center" target="_blank">
                                <img src="{{asset('/img/Betavo_Tokopedia.png')}}" class="img-fluid link-nav">
                            </a>
                        </li>
                    @endif
                    @if(conval('shopee'))
                        <li>
                            <a href="{{conval('shopee')}}" class="h-100 d-flex align-items-center" target="_blank">
                                <img src="{{asset('/img/Betavo_Shopee.png')}}" class="img-fluid link-nav">
                            </a>
                        </li>
                    @endif
                    @if(conval('bukalapak'))
                        <li>
                            <a href="{{conval('bukalapak')}}" class="h-100 d-flex align-items-center" target="_blank">
                                <img src="{{asset('/img/Betavo_Bukalapak.png')}}" class="img-fluid link-nav">
                            </a>
                        </li>
                    @endif
                    @if(conval('facebook'))
                        <li>
                            <a href="{{conval('facebook')}}" class="h-100 d-flex align-items-center" target="_blank">
                                <img src="{{asset('/img/facebook.png')}}" class="img-fluid link-nav">
                            </a>
                        </li>
                    @endif
                    @if(conval('instagram'))
                        <li>
                            <a href="{{conval('instagram')}}" class="h-100 d-flex align-items-center" target="_blank">
                                <img src="{{asset('/img/ig.png')}}" class="img-fluid link-nav">
                            </a>
                        </li>
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

    @if(Request::segment(0) == '' && isset($page))
        <!-- Begin of navbar-sidebar -->
        <nav class="navbar navbar-sidebar">
            <div class="navbar-group">
                <div class="navbar-collapse">
                    <ul id="sidebar-menu" class="navbar-nav nav-menu">
                        <li class="nav-item active" data-menuanchor="home">
                            <a href="#home">
                                <span class="icon ion-home "></span>
                                <span class="text ">{{el($page,'left-menu-intro-label')}}</span>
                            </a>
                        </li>
                        <li class="nav-item" data-menuanchor="about">
                            <a href="#about">
                                <span class="icon ion-android-bulb"></span>
                                <span class="text ">{{el($page,'left-menu-about-label')}}</span>
                            </a>
                        </li>
                        <li class="nav-item" data-menuanchor="gallery">
                            <a href="#gallery">
                                <span class="icon ion-grid"></span>
                                <span class="text ">{{el($page,'left-menu-product-label')}}</span>
                            </a>
                        </li>
                        <li class="nav-item" data-menuanchor="contact">
                            <a href="#contact">
                                <span class="icon ion-android-call"></span>
                                <span class="text ">{{el($page,'left-menu-contact-label')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of navbar-sidebar -->
    @endif

    <!-- Begin of navfull-menu -->
    <nav id="navfull-menu" class="navfull navfull-menu navigation menu-behavior">
        <div class="navbar-group group-bg w-100">
            <h2 class="search-title w-100">Apa yang anda ingin cari?</h2>
            <form action="/cari" method="get">
                <Input type="text" name="keyword" class="text-white" placeholder="Contoh: Speaker">
            </form>
        </div>
    </nav>
    <!-- End of navfull-menu -->
</header>
<!-- END OF Header navigation of the page -->
