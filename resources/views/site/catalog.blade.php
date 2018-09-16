@extends('site.base')

@section('header-image')

@endsection

@section('content')

    <section class="our-team cate-product" id="team">
        <div class="container">

            <div class="row">
                <div class="col-md-3 fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="list-group">
                        <h2 class="media-left dark-text">Danh mục sản phẩm</h2>
                        <ul>

                            @foreach($AllCatalog as $c)
                                <li class="list-group-item">
                                    <a href="{{ url('catalog/'. $c->id ) }}" >
                                        <span>{{ $c->catalogName }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="aside-product">
                        <h3 class="media-left dark-text"></h3>

                        <div style="display: none">{{ $count = 0 }}</div>

                        @foreach($productOfCatalog as $lp)
                            @if($count <= 4)

                                <div style="display: none">{{ $count ++ }}</div>

                            <div class="media col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="media-left media-middle">
                                    <a href="{{ url('product/' . $lp->productId) }}">
                                        <img class="media-object" src="{{ url('upload/' . $lp->productImageLink) }}" alt="Bánh kem dâu">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="{{ url('product/' . $lp->productId) }}">{{ $lp->productName }}</a></h4>
                                    <div class="item-product-price">

                                        <!-- PRICE -->

                                        <p class="price-num green-text">
                                            {{ $lp->productPrice }} ₫
                                        </p>

                                    </div>
                                    <form action="{{ url('product/addToCart/' . $lp->productId) }}" method="post" class="variants" id="product-actions-286943" enctype="multipart/form-data">

                                        {{ csrf_field() }}
                                        <button class="btn btn-theme btn-theme-transparent btn-icon-left btn-more" title="Đặt hàng" type="submit" >
                                            <span>Đặt hàng</span>
                                        </button>

                                    </form>
                                </div>
                            </div>
                            @endif

                        @endforeach


                    </div>
                </div>

                <div id="Breadcrumb" class="media-left Breadcrumb col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('home') }}">Trang chủ</a></li>

                        <li>{{ $catalog->catalogName }}</li>

                    </ol>
                </div>
                <div class="col-md-9 row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                    <div class="collection-title">
                        <h1>{{ $catalog->catalogName }}</h1>
                    </div>

                    @foreach($productOfCatalog as $p)
                        <div class="col-md-4 col-sm-6 col-xs-12 ">

                            <div class="items_product item-1">
                                <div class="item-overlay">
                                    <img src="{{ url('upload/' . $p->productImageLink) }}" alt="Cupcake vani">
                                </div>
                                <div class="item-content">
                                    <div class="item-top-content">
                                        <div class="item-top-content-inner">
                                            <div class="item-product">
                                                <div class="item-top-title">
                                                    <h3><a href="{{ url('product/' . $p->productId) }}" >{{ $p->productName }}</a></h3>
                                                </div>
                                            </div>
                                            <div class="item-product-price">

                                                <!-- PRICE -->

                                                <p class="price-num green-text">
                                                    {{ $p->productPrice }} ₫
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ITEM HOVER CONTENT-->
                                    <div class="item-add-content">
                                        <div class="item-add-content-inner">
                                            <div class="section">
                                                <p>
                                                    Tư vấn: (84-4) 6674 2332
                                                </p>
                                            </div>
                                            <div class="section">
                                                <a href="{{ url('product/' . $p->productId) }}" class="btn btn-primary custom-button red-btn">Chi tiết</a>
                                                <form action="{{ url('product/addToCart/' . $p->productId ) }}" method="post" class="variants" id="product-actions-286958" enctype="multipart/form-data">

                                                    {{ csrf_field() }}

                                                    <button class="btn btn-primary custom-button green-btn" type="submit" title="Đặt hàng">
                                                        Đặt hàng
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </section>

@endsection

