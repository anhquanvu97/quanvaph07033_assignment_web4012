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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Bình Luận Của Bài Viết {{ $post->title}}</h3>
            </div>

            <table class="table" style="margin-top: 0px">
              <thead class="thead-light">
                <tr>
                  <th scope="col" colspan="5">Tổng ({{ count($comments) }} Bình luận)</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comments as $item)
                <tr>
                  <td>
                    <p style="font-weight: 500"> Người Gửi : {{ $item->user_name['name']}}</p>

                    <p style="font-weight: 500"> {{ Carbon\carbon::parse($item->updated_at)->format('d-m-Y') }}</p>

                    <p style="margin-top: 10px">
                      @if ($item->is_active == 1 )
                      {{ $item->content }}
                      @else
                      <span style="color: red">Nội Dung Không Phù Hợp</span>
                      @endif
                    </p>

                    <td ><a class="btn btn-info" href="{{ route('comments.edit',$item->id) }}">Sửa</a></td>
                    <td>
                      <form action="{{ route('comments.destroy',$item->id) }}" method="POST">
                       
                        @csrf
                        @method('DELETE')
                        <button onclick="return window.confirm('Are you sure?');" type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    </td>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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

