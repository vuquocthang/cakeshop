@extends('site.base')

@section('header-image')


@endsection


@section('content')

    <section class="our-team cate-product" id="team">

        <div class="container">

            @if($cart != null)
            <h1 class="page-title">Giỏ hàng</h1>

            <div class="table-responsive">
                <form action="{{ url('cart/update') }}" method="post">
                    {{ csrf_field() }}
                    <table class="table shop_table cart table-striped">
                        <thead>
                        <tr>
                            <th class="product-remove">Xóa</th>
                            <th class="product-desc">Tên sản phẩm</th>
                            <th class="product-size visible-md visible-lg">Giá</th>
                            <th class="product-qty">Số lượng</th>
                            <th class="product-price">Tổng</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $count = 0;
                        @endphp

                        @foreach($cart as $k => $v)
                        <tr class="cart_item">
                            <td class="product-remove">
                                <a href="{{ url('cart/del/' . $k ) }}" class="remove">
                                    <i class="fa fa-times-circle fa-2x"></i>
                                </a>
                            </td>

                            <td class="product-desc">
                                <dl>
                                    <dt class="hidden-xs"><img src="" alt=""></dt>
                                    <dd>
                                        <h3>{{ \App\Product::findOrFail($k)->productName }}</h3>
                                    </dd>
                                </dl>
                            </td>
                            <td class="product-size visible-md visible-lg">
                                <h3>{{ \App\Product::findOrFail($k)->productPrice }} ₫</h3>
                            </td>
                            <td class="product-qty">
                                <div class="quantity buttons_added">
                                    <input type="text" value="{{ $v }}" size="4" class="qty text form-control" title="Số lượng" name="quantity[]">

                                    <input type="hidden" value="{{ $k }}" size="4" class="qty text form-control"  name="id[]">

                                </div>
                            </td>
                            <td class="product-price">
                                <h3>{{ \App\Product::findOrFail($k)->productPrice * $v }} ₫</h3>

                                @php
                                    $count += \App\Product::findOrFail($k)->productPrice * $v;
                                @endphp
                            </td>
                        </tr>

                        @endforeach

                        <tr>
                            <td class="actions" colspan="6">
                                <input type="submit" value="Cập nhật" name="update" class="btn btn-default btn-lg">
                                <input type="button" value="Tiến hành thanh toán" onclick="window.location.href='{{ url('checkout') }}'" class="btn btn-primary btn-lg">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="cart-collaterals">
                <table class="totals">
                    <tbody>
                    <tr class="order-total">
                        <th>Tổng cộng : </th>
                        <td><span class="amount"> {{ $count }} ₫</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            @else
                <h1 class="page-title">Giỏ hàng</h1>
                <p>Không có sản phẩm nào trong giỏ hàng của bạn. Quay lại
                    <a href="{{ url('home') }}">cửa hàng</a> để tiếp tục mua sắm.</p>
            @endif

        </div>
    </section>

@endsection