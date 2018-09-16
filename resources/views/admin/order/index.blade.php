@extends('admin.base')


@section('main')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Danh Sách Đơn Hàng</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Hành Động</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orders as $order)
                    <tr>

                        <td>{{ $order->id }}</td>

                        @php
                            $date=date_create($order->orderDate);
                        @endphp

                        <td>{{ date_format( $date,"d/m/Y") }}</td>
                        <td>
                            <a href="{{ url('') }}">Xem chi tiết</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/order/status/' . $order->id) }}">
                                <div class="">
                                    <label>
                                        <input type="checkbox" class="js-switch" {{ $order->orderStatus == 1 ? 'checked' : '' }} />  <a href="{{ url('admin/order/status/' . $order->id) }}">{{ $order->orderStatus == 1 ? 'Đã Xác Nhận' : 'Chưa Xác Nhận' }}</a>
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
@endsection