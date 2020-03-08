@extends('backend.layout')


@section('content')

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh mục</h1>
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
                    <th>Tên Danh Mục</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày cập Nhật</th>
                    <th><a href="{{ route('categories.create') }}" class="btn btn-success" >Thêm</a></th>
                  </tr>
              </thead>
              <tbody>
                    @foreach ($categories as $item)
                    <tr>
                    <td>{{ $item->name }}</td>
                        <td>{{ $item->ShowNameUser['name'] }}</td>
                        <td>{{ Carbon\carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                        <th>
                          <form action="{{ route('categories.destroy',$item->id) }}" method="POST">
                            <a  class="btn btn-primary" href="{{ route('categories.edit',$item->id) }}">Sửa</a>
                            @csrf
                            @method('DELETE')
                            <button onclick="return window.confirm('Are you sure?');" type="submit" class="btn btn-danger">Xóa</button>
                        </form>

                        
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <style type="text/css">
              .pagination{padding:0px; margin:0px;}
            </style>
            {{$categories->render()}}
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

