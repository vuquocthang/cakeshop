@extends('site.base')


@section('header-image')

@endsection

@section('content')

    <section class="our-team cate-product" id="team">
        <div class="container">
            <div itemscope="" itemtype="http://schema.org/Product">

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

                            @for($i=0; $i<4; $i++)
                            <div class="media col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="media-left media-middle">
                                    <a href="">
                                        <img class="media-object" src="{{ url('upload/' . $product->productImageLink ) }}" alt="Bánh kem dâu">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="{{ url('product/' . $product->id) }}">{{ $product->productName }}</a></h4>
                                    <div class="item-product-price">

                                        <!-- PRICE -->

                                        <p class="price-num green-text">
                                            {{ $product->productPrice }} ₫
                                        </p>

                                    </div>
                                    <form action="{{ url('product/addToCart/' . $product->id ) }}" method="post" class="variants" id="product-actions-286943" enctype="multipart/form-data">

                                        <button class="btn btn-theme btn-theme-transparent btn-icon-left btn-more" title="Đặt hàng" type="submit" ><span>Đặt hàng</span></button>

                                    </form>
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                    <div id="Breadcrumb" class="media-left Breadcrumb col-md-9">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Trang chủ</a></li>

                            <li>{{ $product->productName }}</li>

                        </ol>
                    </div>
                    <div class="col-md-9  wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                        <div class="detail-pr">
                            <div class="col-md-6 wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                                <div id="product-large" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 788px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 394px;">
                                                <div class="item">

                                                    <img src="{{ url('upload/' . $product->productImageLink ) }}" alt="Bánh kem bạc hà" class="featured-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                <h1 itemprop="name">{{ $product->productName }}</h1>
                                <p class="price">

                                    <span class="price-num green-text" itemprop="price">{{$product->productPrice}} ₫</span>

                                </p>
                                <p>{{ $product->productDescription }}</p>
                                <hr>
                                <form action="{{ url('product/addToCart/' . $product->id ) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="variations">
                                        <div class="row">

                                            <input type="hidden" name="variantId" value="455162">

                                        </div>
                                    </div>

                                    <div class="quantity buttons_added">
                                        <span>Số lượng: </span>
                                        <input type="number" class="qty text form-control" title="Số lượng" value="1" min="1" name="quantity">
                                    </div>
                                    <input type="submit" class="btn btn-primary custom-button green-btn cart" value="Đặt Hàng">

                                </form>
                            </div>
                        </div>

                        <ul class="nav nav-tabs product-tabs">
                            <li class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Mô tả sản phẩm</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <p>{{ $product->productDescription }}</p>
                            </div>



                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection