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
              <h3 class="card-title">Chỉnh Sửa Bài Viết</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="card-body">
                <div>
                  <select name="category_id" class="form-control">
                    @foreach ($Categories as $item)
                    <option 
                    @if ($post->category_id == $item->id)
                    selected="selected"
                    @endif 
                    value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Tiêu đề</label><br>
              
                  <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                  <label>Người Đăng</label>
                  <input type="text" class="form-control" value="{{ $post->ShowNameUser['name'] }}" readonly>
                </div>

                <div class="form-group">
                  <label>Ảnh Hiện Tại</label>
                  <img src="storage/{{ $post->image }}" width="200px" height="150px">
                </div>

                <div class="form-group">
                  <label> Chọn Ảnh Mới (không chọn thì vẫn ảnh cũ)</label>
                  <input class="form-control" name="image" type="file">
                </div>

                <div class="form-group">
                  <label>Nội dung</label><br>
                
                  <textarea name="content" style="width: 100%;height: 100px;">{{ $post->content }}</textarea>
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Lưu Sửa</button>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
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