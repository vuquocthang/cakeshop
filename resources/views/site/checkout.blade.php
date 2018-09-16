<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop Bánh Ngọt - Thanh toán đơn hàng">

    <title>Shop Bánh Ngọt - Thanh toán đơn hàng</title>



    <link href="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20160122" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/nprogress.css?4" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?4" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/checkout.css?4" rel="stylesheet" type="text/css">


</head>

<body class="body--custom-background-color ">
<form method="post" action="" data-toggle="validator" class="formCheckout" novalidate="true">
    <div context="checkout" define="" class="container checkout">
        <div class="header">
            <div class="wrap">
                <div class="shop logo logo--left ">

                    <h1 class="shop__name">
                        <a href="{{ url('home') }}">
                            Shop Bánh Ngọt
                        </a>
                    </h1>

                </div>
            </div>
        </div>
        <div class="main">
            <div class="wrap clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-12 order-info" define="{order_expand: false}">
                        <div class="order-summary order-summary--custom-background-color ">
                            <div class="order-summary-header summary-header--thin summary-header--border">
                                <h2>
                                    <label class="control-label">Đơn hàng</label>
                                    <label class="control-label">{{ count(\Illuminate\Support\Facades\Session::get('cart')) }}</label>
                                </h2>
                                <a class="underline-none expandable expandable--pull-right mobile" bind-event-click="toggle(this, '.order-items')" bind-class="{open: order_expand}" href="javascript:void(0)">
                                    Xem chi tiết
                                </a>
                            </div>
                            <div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
                                <div class="summary-body summary-section summary-product">
                                    <div class="summary-product-list">
                                        <ul class="product-list">
                                            @php
                                                $total = 0;
                                            @endphp

                                            @foreach(\Illuminate\Support\Facades\Session::get('cart') as $k => $v)
                                            <li class="product product-has-image clearfix">
                                                <div class="product-thumbnail pull-left">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img src="{{ url('upload/' . \App\Product::findOrFail($k)->productImageLink ) }}" alt="Kem xịt Paysan Breton" class="product-thumbnail__image">

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                                </div>
                                                <div class="product-info pull-left">
                                                        <span class="product-info-name">
                                                            <strong>{{ \App\Product::findOrFail($k)->productName }}</strong>
                                                        </span>
                                                </div>

                                                <strong class="product-price pull-right">
                                                    {{ \App\Product::findOrFail($k)->productPrice * $v }} ₫
                                                </strong>

                                                @php
                                                $total += \App\Product::findOrFail($k)->productPrice * $v;
                                                @endphp
                                            </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="summary-section border-top-none--mobile">

                                <div class="total-line total-line-subtotal clearfix">
                                        <span class="total-line-name pull-left">
                                            Phí vận chuyển
                                        </span>
                                    <span class="total-line-subprice pull-right">40000₫</span>
                                </div>
                                <div class="total-line total-line-total clearfix">
                                        <span class="total-line-name pull-left">
                                            Tổng cộng
                                        </span>
                                    <span class="total-line-price pull-right">{{ $total + 40000 }}₫</span>
                                </div>
                            </div>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::get('userId') != null)
                        <div class="form-group clearfix hidden-sm hidden-xs">
                            <input class="btn btn-primary col-md-12 mt10 btn-checkout" onclick="location.href='{{ url('order') }}'" type="button" value="ĐẶT HÀNG">
                        </div>
                        @else
                            <div class="form-group clearfix hidden-sm hidden-xs">
                                <input class="btn btn-primary col-md-12 mt10 btn-checkout" onclick="location.href='{{ url('loginForm') }}'" type="button" value="Đăng Nhập Để Đặt Hàng">
                            </div>
                        @endif

                        <div class="form-group has-error">
                            <div class="help-block ">
                                <ul class="list-unstyled">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 customer-info">
                        <div class="form-group m0">
                            <h2>
                                <label class="control-label">Thông tin mua hàng</label>
                            </h2>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::get('userId') == null)
                        <div class="form-group">
                            <a href="{{ url('registerForm') }}">Đăng ký tài khoản mua hàng</a>
                            <span style="padding: 0 5px;">/</span>
                            <a href="{{ url('loginForm') }}">Đăng nhập để tiếp tục</a>
                        </div>
                        @else
                        <div class="billing">
                            <div class="form-group">
                                <a class="underline-none open"  href="{{ url('profile') }}">
                                    <span >Thông tin thanh toán sẽ là thông tin trong tài khoản</span>
                                </a>
                            </div>

                        </div>

                        @endif

                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="shipping-method" bind-show="shippingMethods.length > 0">
                            <div class="form-group">
                                <h2>
                                    <label class="control-label">Vận chuyển</label>
                                </h2>
                                <div class="next-select__wrapper">
                                    <select bind-event-change="changeShippingMethod()" name="ShippingMethod" bind="shippingMethod" class="form-control next-select">
                                        <option fee="40000" value="19255,0">Giao hàng tận nơi - 40.000₫</option>
                                    </select>
                                    <span class="next-icon next-icon--size-12">
                                            <img src="//bizweb.dktcdn.net/assets/themes_support/angle-down.png?4" alt="" class="img-responsive">
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group payment-method-list">
                            <h2>
                                <label class="control-label">Thanh toán</label>
                            </h2>

                            <div class="radio">
                                <label class="radio-wrapper">
                                    <div class="radio_input">
                                        <div bind-class="{'checked' : payment_method_id == 19180}" class="iradio_square checked" style="position: relative;">

                                            <input checked="checked" bind="payment_method_id" value="19180" data-check-id="4" type="radio" class="icheck square" name="PaymentMethodId" style="position: absolute; opacity: 0;">

                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
                                        </div>
                                    </div>
                                    <span>Thanh toán khi giao hàng (COD)</span>
                                </label>

                                <div bind-class="{'slidedown-visible' : payment_method_id == 19180}" class="payment-method-description slidedown-hidden slidedown-visible">
                                    <p>cod</p>
                                </div>

                            </div>

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#moca-modal" data-backdrop="static" data-keyboard="false" class="trigger-moca-modal" style="display: none;" title="Thanh toán qua Moca">
                            </a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#moca-error-modal" class="trigger-moca-error-modal" style="display: none;" title="Lỗi thanh toán qua Moca">
                            </a>
                            <div class="modal fade moca-modal" id="moca-modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div>
                                            <iframe style="border: 0px; width: 100%; height: 100%;" src=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="moca-error-modal" data-width="" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <div>
                                                <p>Giao dịch của bạn chưa đủ hạn mức thanh toán</p>
                                                <p>Hạn mức tối thiểu để thanh toán được là 1đ</p>
                                                <p>Vui lòng chọn hình thức thanh toán khác</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix hidden-md hidden-lg">
                            <input class="btn btn-primary col-md-12 mt10 btn-checkout" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</form>

<script src="//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/twine.min.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/validator.min.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/nprogress.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/money-helper.js?4" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/checkout.js?145" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ajaxStart(function() {
        NProgress.start();
    });
    $(document).ajaxComplete(function() {
        NProgress.done();
    });

    context = {}

    $(function() {
        Twine.reset(context).bind().refresh();
    });

    $(document).ready(function() {

        $("#customer-address").trigger("change");

        $("select[name='BillingProvinceId']").trigger("change");
        $("select[name='ShippingProvinceId']").trigger("change");
        Twine.context(document.body).checkout.caculateShippingFee();
    });
</script>

</body>