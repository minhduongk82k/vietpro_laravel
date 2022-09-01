@extends("backend/master/master")
@section("title", "Danh sách sản phẩm")
@section("main")

<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Danh sách sản phẩm</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách sản phẩm</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">

				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<div class="alert bg-success" role="alert">
								<svg class="glyph stroked checkmark">
									<use xlink:href="#stroked-checkmark"></use>
								</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
							</div>
							<a href="addproduct.html" class="btn btn-primary">Thêm sản phẩm</a>
							<table class="table table-bordered" style="margin-top:20px;">

								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Thông tin sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th>Tình trạng</th>
										<th>Danh mục</th>
										<th width='18%'>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								@foreach($products as $product)
									<tr>
										<td>{{$product->id}}</td>
										<td>
											<div class="row">
												<div class="col-md-3"><img src="img/{{$product->image}}" alt="Áo đẹp" width="100px" class="thumbnail"></div>
												<div class="col-md-9">
													<p><strong>Mã sản phẩm :{{$product->code}}</strong></p>
													<p>Tên sản phẩm :{{$product->products_name}}</p>


												</div>
											</div>
										</td>
										<td>{{$product->price}} VND</td>
										<td>
											@if($product->state == 1)
											  <a class="btn btn-success" href="#" role="button">Còn hàng</a>
											@else
											  <a class="btn btn-danger" href="#" role="button">Hết hàng</a>
											@endif

										</td>
										<td>{{$product->categories_name}}</td>
										<td>
											<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</td>
									</tr>

								@endforeach

								</tbody>
							</table>
							<div align='right'>
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
			<!--/.row-->


		</div>
		<!--end main-->

		<!-- javascript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>



		@endsection