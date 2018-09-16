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
                        <h3 style="margin-bottom: 30px;">Đăng ký</h3>

                        <div class="form-error col-md-12">
                            <ul class="disc">
                                <li>
                                    {{ $errors->first('userEmail') }}
                                </li>

                                <li>
                                    {{ $errors->first('userPassword') }}
                                </li>

                            </ul>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ old('userFullName') }}" class="form-control input-lg" placeholder="Họ Và Tên" name="userFullName" required>
                        </div>

                        <div class="form-group">
                            <input type="email" value="{{ old('userEmail') }}" class="form-control input-lg" placeholder="Email" name="userEmail" required>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ old('userPhoneNumber') }}" class="form-control input-lg" placeholder="Số Điện Thoại" name="userPhoneNumber" required>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ old('userAddress') }}" class="form-control input-lg" placeholder="Địa Chỉ" name="userAddress" required>
                        </div>


                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Mật khẩu" name="userPassword" required>
                        </div>

                        <a href="{{ url('loginForm') }}" class="">Đăng Nhập</a>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection