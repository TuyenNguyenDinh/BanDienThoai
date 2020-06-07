@extends('layouts.admin')
@section('title','Add Product')
@section('main')
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
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					<form method="post" action="{{ route('products.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Category_id</label>
									<select type="number" name="category_id" class="form-control">
										@foreach ($categories as $category)
										<option value="{{ $category->id}}">{{ $category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input required type="text" name="ten" class="form-control">
									@if ($errors->has('ten'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('ten')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Ảnh sản phẩm</label>
									<!-- <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="#"> -->
									<input require type="text" name="anh" class="form-control">
								</div>
								<div class="form-group">
									<label>Giá sản phẩm</label>
									<input required type="number" name="gia_sp" class="form-control">
								</div>
								<div class="form-group">
									<label>Số lượng</label>
									<input required type="number" name="so_luong" class="form-control">
								</div>
								<div class="form-group">
									<label>Miêu tả</label><br>
									<textarea required name="thong_tin_cu_the"></textarea>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection