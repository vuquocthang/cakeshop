<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop name - Thanh toán đơn hàng" />

    <title>Shop Bánh Ngọt - Cảm ơn</title>


    <link href='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20160122' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?4' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/checkout.css?20160724' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/thankyou_v2.css?4' rel='stylesheet' type='text/css' />

</head>

<body class="body--custom-background-color ">

<div context="checkout"  class="container">
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
            <div class="row thankyou-infos">
                <div class="col-md-7 thankyou-message">
                    <div class="thankyou-message-icon unprint">
                        <div class="icon icon--order-success svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                <g fill="none" stroke="#8EC343" stroke-width="2">
                                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="thankyou-message-text">
                        <h3>Cảm ơn bạn đã đặt hàng</h3>
                        <p>

                            Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất ! <a href="{{ url('home') }}">Tiếp tục mua hàng</a>

                        </p>
                        <div style="font-style: italic;">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="main_footer footer unprint">

            <div class="mt10"></div>
        </div>

    </div>
</div>

<style>
    #map {
        width: 100%;
        height: 245px;
    }

    .hidden-map {
        display: none;
    }
</style>

<script src='//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?4' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?4' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/twine.min.js?4' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/checkout.js?141' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/thankyou.js?141' type='text/javascript'></script>

<script type="text/javascript">
    context = {}

    $(function() {
        Twine.reset(context).bind().refresh();
    });
</script>


</body>

</html>