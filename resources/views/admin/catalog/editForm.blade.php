@extends('admin.base')

@section('title', 'Sửa Danh Mục')

@section('main')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sửa Danh Mục</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form action="{{ url('admin/catalog/edit/' . $catalog->id) }}" method="post" data-parsley-validate="" class="form-horizontal form-label-left" >

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên Danh Mục <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input value="{{ $catalog->catalogName }}" type="text" id="first-name" name="catalogName" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>



                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" class="btn btn-success">Sửa</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection