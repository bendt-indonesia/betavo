<div class="mt-2 mt-md-4 col-12 col-md-4 col-lg-3 mb-3">
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
                <?php
                $desc = str_replace('<h4>','<p>',$proList->deskripsi);
                $desc = str_replace('</h4>','</p>',$desc);
                $desc = str_replace('<p>','',$desc);
                $desc = str_replace('</p>','<br>',$desc);
                $desc = strip_tags($desc,'<br>');
                ?>
                <p style="font-size: 12pt; min-height:80px">
                    <?php
                    $test = explode("<br>", $desc);
                    foreach ($test as $idx=>$line) {
                        if($idx===6) break;

                        echo $line.'<br>';
                    }
                    ?>
                </p>
                <a class="btn btn-line-a mt4 {{isset($btnLine) ? $btnLine : ''}}" href="{{route('product',['slug'=>$proList->slug])}}">
                    <span class="text">Lihat detail</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
                        <span class="arrow-right"></span>
                    </span>
                </a>
            </div>
        </div>
    </a>
</div>
