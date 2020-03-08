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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa Bình Luận</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if (session('thongbao'))
            <h4 style="color: blue">{{ session('thongbao') }}</h4>
            @endif
            <table class="table">
              <thead class="thead-light">
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p style="font-weight: 500"> Người Gửi : {{ $comment->user_name['name']}}</p>

                    <p style="font-weight: 500"> {{ Carbon\carbon::parse($comment->updated_at)->format('d-m-Y') }}</p>
                    <form action="{{ route('comments.update',$comment->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <p style="margin-top: 10px">Nội Dung:<br>
                        
                        <textarea name="content" cols="138" rows="10">{{ $comment->content }}</textarea>
                      </p>
                      <div class="form-group">
                        <label class="control-label">Trạng Thái</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" value="1" type="radio" name="is_active" @if($comment->is_active == 1) checked @endif >Phù Hợp
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" value="0"  type="radio" name="is_active" @if($comment->is_active == 0) checked @endif >Không Phù Hợp
                          </label>
                        </div>
                      </div>
                      <button class="btn btn-primary" >Lưu</button>
                    </form>
                  </td>
                </tr>
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
