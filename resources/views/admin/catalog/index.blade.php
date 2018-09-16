@extends('admin.base')

@section('title', 'Danh Sách Danh Mục')

@section('main')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh Sách Danh Mục</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tên Danh Mục</th>
                            <th>Hành Động</th>

                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($AllCatalog as $catalog)
                                <tr>
                                    <th>{{ $catalog->catalogName }}</th>
                                    <td><a href="{{ url('admin/catalog/editForm/' . $catalog->id) }}">Sửa</a></td>

                                    <td>
                                        <a href="{{ url('admin/catalog/status/' . $catalog->id) }}">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" {{ $catalog->catalogStatus == 1 ? 'checked' : '' }} />  <a href="{{ url('admin/catalog/status/' . $catalog->id) }}">{{ $catalog->catalogStatus == 1 ? 'Vô Hiệu' : 'Kích Hoạt' }}</a>
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

