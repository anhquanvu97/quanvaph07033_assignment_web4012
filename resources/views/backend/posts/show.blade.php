 @extends('backend.layout')

 @section('content')
 				<!-- Content Wrapper. Contains page content -->
 				<div class="content-wrapper">
 					<!-- Content Header (Page header) -->
 					<section class="content-header">
 						<div class="container-fluid">
 							<div class="row mb-2">
 								<div class="col-sm-6">
 								</div>
 							</div>
 						</div><!-- /.container-fluid -->
 					</section>

 					<!-- Main content -->
 					<section class="content">
 						<div class="container-fluid">
 							<div class="row">
 								<!-- left column -->
 								<div class="col-md-12">
 									<!-- jquery validation -->
 									@if(session('thongbao'))
 										<div class="alert bg-success" style="height: 40px" role="alert">
 											<span class="glyphicon glyphicon-remove">{{ session('thongbao') }}</span>
 										</div>
 										@endif
 									<div class="card card-primary">
 										<div class="card-header">
 											<h3 class="card-title">Chi Tiết Bài Viết</h3>
 										</div>
 										<!-- /.card-header -->
 										<!-- form start -->


 										<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
 											@csrf
 											<div class="card-body">
 												<div class="form-group">
 													<label>Danh Mục</label>
 													<input type="text" name="title" class="form-control" value="{{ $post->ShowNameCategory['name'] }}" readonly>
 												</div>
 												<div class="form-group">
 													<label>Người Đăng</label>
 													<input type="text" name="title" class="form-control" value="{{ $post->ShowNameUser['name'] }}" readonly>
 												</div>
 											<div class="form-group">
 												<label>Tiêu đề</label>
 												<input type="text" name="title" class="form-control"  value="{{ $post->title }}" readonly>
 											</div>

 											<div class="form-group">
 												<label>Ảnh</label>
 												<img src="storage/{{ $post->image }}" width="250px" height="200px">
 											</div>

 											<div class="form-group">
 												<label>Nội dung</label>
 												<textarea name="content" style="width: 100%;height: 100px;">{{ $post->content }}</textarea>
 											</div>
 											<div class="form-group">
 												<label>Ngày Tạo</label>
 												<input type="text" name="title" class="form-control" readonly value="{{ carbon\carbon::parse($post->created_at)->format('d-m-Y') }}">
 											</div>
 											<div class="form-group">
 												<label>Ngày Cập Nhật</label>
 												<input type="text" name="title" class="form-control" readonly value="{{ carbon\carbon::parse($post->updated_at)->format('d-m-Y') }}">
 											</div>
 										</div>
 									</div>
 								</form>
 							</div>
 							<!-- /.card -->
 						</div>
 						<!--/.col (left) -->
 						<!-- right column -->
 						<div class="col-md-6">

 						</div>
 						<!--/.col (right) -->
 					</div>
 					<!-- /.row -->
 				</div><!-- /.container-fluid -->
 			</section>
 			<!-- /.content -->
 		</div>
 		@endsection