<?php
$rs1 = app('request')->input('rs1') ? app('request')->input('rs1') : Request::segment(1);
$rs2 = app('request')->input('rs2') ? app('request')->input('rs2') : Request::segment(2);
$rs3 = app('request')->input('rs3') ? app('request')->input('rs3') : Request::segment(3);
$rs4 = app('request')->input('rs4') ? app('request')->input('rs4') : Request::segment(4);
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Dashboard</li>

            <li class="@include('backend.include.menu.active',['crs1' => 'dashboard'])">
                <a href="{{route('backend')}}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="@include('backend.include.menu.active',['crs2' => 'client_messages'])">
                <a href="{{route('backend.client_messages.index')}}"> <i class="fa fa-inbox"></i> <span>Messages</span></a>
            </li>

            <li class="@include('backend.include.menu.active',['crs2' => 'produk_kategori'])">
                <a href="{{route('backend.produk_kategori.index')}}"> <i class="fa fa-tag"></i> <span>Kategori</span></a>
            </li>

            <li class="@include('backend.include.menu.active',['crs2' => 'produk_sub_kategori'])">
                <a href="{{route('backend.produk_sub_kategori.index')}}"> <i class="fa fa-tags"></i> <span>Sub Kategori</span></a>
            </li>

            <li class="@include('backend.include.menu.active',['crs2' => 'produk'])">
                <a href="{{route('backend.produk.index')}}"> <i class="fa fa-cubes"></i> <span>List Produk</span></a>
            </li>

            <li class="header">Content Management System</li>
            @foreach(\CMSPage::all() as $page)
                <li class="{{count($page->lists) > 0 ? 'treeview' : ''}} @include('backend.include.menu.active',['crs3' => $page->slug])">
                    <a href="{{route('cms.page',['slug'=>$page->slug])}}">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>{{$page->name}}</span>
                        @if(count($page->lists) > 0)
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        @endif
                    </a>
                    @if(count($page->lists) > 0)
                        <ul class="treeview-menu">
                            @foreach($page->lists as $list)
                                <li class="@include('backend.include.menu.active',['crs4' => $page->slug.'-'.$list->slug])">
                                    <a href="{{route('cms.list',['slug'=>$page->slug, 'list_slug'=> $list->slug, 'rs4'=> $page->slug.'-'.$list->slug])}}">
                                        <i class="fa fa-angle-right"></i>
                                        <span>{{$list->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                            <li class="@include('backend.include.menu.active',['crs3' => $page->slug])">
                                <a href="{{route('cms.page',['slug'=>$page->slug])}}">
                                    <span><i class="fa fa-angle-right mr-3"></i> All Elements</span>
                                </a>
                            </li>
                        </ul>
                    @endif
                </li>
            @endforeach

            <li class="header">Config</li>

            <li class="@include('backend.include.menu.active',['crs2' => 'configs'])">
                <a href="{{route('backend.configs')}}">
                    <i class="fa fa-cogs"></i>
                    <span>Config</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
