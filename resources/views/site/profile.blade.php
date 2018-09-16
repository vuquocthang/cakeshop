@extends('site.base')


@section('header-image')

@endsection


@section('content')
    <section class="our-team cate-product" id="team">
        <div class="container">

            <div class="gap-10"></div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form accept-charset="UTF-8" action="{{ url('register') }}" id="customer_register" method="post">
                        {{ csrf_field() }}
                        <input name="FormType" type="hidden" value="customer_register">
                        <input name="utf8" type="hidden" value="true">
                        <h3 style="margin-bottom: 30px;">Trang Khách Hàng</h3>



                        <div class="form-group">
                            <input type="text" value="{{ $user->userFullName }}" class="form-control input-lg" placeholder="Họ Và Tên" name="userFullName" required disabled>
                        </div>

                        <div class="form-group">
                            <input type="email" value="{{ $user->userEmail }}" class="form-control input-lg" placeholder="Email" name="userEmail" required disabled>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->userPhoneNumber }}" class="form-control input-lg" placeholder="Số Điện Thoại" name="userPhoneNumber" required disabled>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->userAddress }}" class="form-control input-lg" placeholder="Địa Chỉ" name="userAddress" required disabled>
                        </div>


                        <div class="pull-left">
                            <a href="{{ url('logout') }}" class="btn btn-primary btn-lg">Đăng Xuất</a>
                        </div>

                        <div class="pull-right">
                            <a href="{{ url('editProfile') }}" class="btn btn-primary btn-lg">Sửa Thông Tin</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection