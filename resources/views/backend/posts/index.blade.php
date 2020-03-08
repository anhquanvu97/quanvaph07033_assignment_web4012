@extends('backend.layout')


@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách bài viết</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Hình Ảnh</th>
                  <th>Tiêu Đề</th>
                  <th>Danh Mục</th>
                  <th><a href="{{ route('posts.create') }}" class="btn btn-success" >Thêm</a></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <tr>
                  <td><img src="storage/{{ $post->image }}" width="70px" height="50px"></td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->ShowNameCategory['name'] }}</td>
                  <th>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a  class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <button onclick="return window.confirm('Are you sure?');" type="submit" class="btn btn-danger">Xóa</button>
                </form> 
                  </th>
                </tr>
                @endforeach
              </tbody>
            </table>
            <style type="text/css">
              .pagination{padding:0px; margin:0px;}
            </style>
            {{$posts->render()}}
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection
@push('scripts')
<script>
  $("a[id^='btn_delete_']").click(function (event) {
    id = event.currentTarget.attributes.id.value.replace('btn_delete_', '');
    $("#delete_form_" + id).submit();
  });
</script>
@endpush

@push('scripts')
<script>
 function xoa () {
   return confirm('Bạn có muốn xóa không');
 }
</script>
@endpush
