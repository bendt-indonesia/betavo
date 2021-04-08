<a href="{{route('product',['slug'=>$proList->slug])}}" class="text-white link-plain">
    <div class="item-grid-a">
        <div class="item-img mt-4 mb-4 rounded-border">
            <img class="img imgProduk" src="{{Storage::url($proList->image_url_1)}}">
        </div>
        <div class="item-header">
            <p>
                <b class=" force-title">{{$proList->nama_produk}}</b>
            </p>
        </div>
        <div class="item-content">
            <a class="btn btn-line-a {{isset($btnLine) ? $btnLine : ''}}" href="{{route('product',['slug'=>$proList->slug])}}">
                <span class="text">Lihat detail</span>
                <span class="icon icon-menu icon-arrow-a icon-anim">
                    <span class="arrow-right"></span>
                </span>
            </a>
        </div>
    </div>
</a>
