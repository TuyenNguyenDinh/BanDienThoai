@extends('layouts.admin')
@section('main')
@section('title','Edit Product')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form action="{{ route('products.update', $product->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Category_id</label>
                                    <select required type="number" name="category_id" class="form-control">
										@foreach ($categories as $category)
										<option @if($product->category_id == $category->id) selected @endif value="{{ $category->id}}">{{ $category->name}}</option>
										@endforeach
									</select>
                                </div>
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="ten" value="{{ $product->ten }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <!-- <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="#"> -->
                                    <input require type="text" name="anh" value="{{ $product->anh }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required type="nuber" name="gia_sp" value="{{ $product->gia_sp }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input required type="number" name="so_luong" value="{{ $product->so_luong }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Miêu tả</label><br>

                                    <textarea required name="thong_tin_cu_the" >{{ $product->thong_tin_cu_the}}</textarea>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        </>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endsection