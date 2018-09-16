@extends('site.base')


@section('header-image')


    @endsection


@section('content')

    <section class="our-team cate-product" id="team">
        <div class="container">

            <div class="gap-10"></div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <form accept-charset="UTF-8" action="{{ url('login') }}" id="customer_login" method="post">
                        {{ csrf_field() }}
                        <input name="FormType" type="hidden" value="customer_login">
                        <input name="utf8" type="hidden" value="true">
                        <h3>Đăng nhập</h3>
                        <div class="gap-20"></div>

                        <div class="form-group">
                            <input type="Email" value="{{ old('userEmail') }}" class="form-control input-lg" id="exampleInputEmail" placeholder="Email" name="userEmail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" id="exampleInputPassword" placeholder="Mật khẩu" name="userPassword">
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                        </div>
                    </form>

                </div>
                <div class="col-sm-6 col-xs-12" style="margin-top:30px;">
                    <h3>Bạn chưa có tài khoản</h3>
                    <div class="gap-15"></div>
                    <p>Nếu bạn chưa có tài khoản hãy đăng lý tài khoản ngay với chúng tôi để nhận được nhưng thông tin hấp dẫn cũng như những ưu đãi khi bạn mua sắm tại cửa hàng chúng tôi.</p>
                    <a href="{{ url('registerForm') }}" class="btn btn-primary btn-lg">Đăng ký</a>
                </div>
            </div>


        </div>
    </section>

@endsection