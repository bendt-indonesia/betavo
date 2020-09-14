@extends('layouts.frontend', [
    "meta_title" => 'Hasil Pencarian untuk '.$keyword,
    "footer_bg" => true,
])

@section('head')

@endsection

@section('content')
    <section data-id="featured-projects" class="section section-page  fp-auto-height-responsive top-margin">
        <div class="section-margin anim">
            <div class="section-header align-x-center">
                <div class="width-large d-flex bd-highlight">
                    <div class=" d-flex justify-content-end align-items-center">
                        <h1 class="h-title font-title anim-1 d-inline pb-0">
                            Hasil pencarian
                        </h1>
                    </div>
                </div>
            </div>

            <div class="section-header align-x-center">
                <div class="width-large d-flex bd-highlight">
                    <p style="max-width: none;margin-top: 20px">Kata Kunci: {{$keyword}}</p>
                </div>
            </div>

            <div class="section-content align-x-center">
                <div class="c-wrapper width-large anim-3">
                    <div class="row">

                    @if(count($listProduk)>0)
                        @foreach($listProduk as $row)
                            @include('component.productList',['proList'=>$row])
                        @endforeach
                    @else
                        <div class="mt-4 col-12 col-md-6">
                            <p class="text-white">Tidak ada data yang relevan</p>
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
    </section>
@endsection

@section('script')

@endsection
