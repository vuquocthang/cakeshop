@extends('admin.base')

@section('title', 'Danh Sách Sản Phẩm')

@section('main')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh Sách Sản Phẩm</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Tên Danh Mục</th>
                            <th>Ảnh Sản Phẩm</th>
                            <th>Giá Sản Phẩm</th>
                            <th>Mô Tả Sản Phẩm</th>
                            <th>Hành Động</th>

                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($AllProduct as $product)
                                <tr>
                                    <th>{{ $product->productName }}</th>
                                    <th>{{ $product->catalogName }}</th>
                                    <th><img width="50px" src="{{ url('upload/' . $product->productImageLink) }}"></th>
                                    <th>{{ $product->productPrice }}</th>
                                    <th>{{ $product->productDescription }}</th>
                                    <td><a href="{{ url('admin/product/editForm/' . $product->productId) }}">Sửa</a></td>

                                    <td>
                                        <a href="{{ url('admin/product/status/' . $product->productId) }}">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" {{ $product->productStatus == 1 ? 'checked' : '' }} />  <a href="{{ url('admin/product/status/' . $product->productId) }}">{{ $product->productStatus == 1 ? 'Vô Hiệu' : 'Kích Hoạt' }}</a>
                                                </label>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection

