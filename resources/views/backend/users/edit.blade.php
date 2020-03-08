@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

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
            @if(session('thongbao'))
            <div class="card-header">
             <h3 class="card-title">{{ session('thongbao') }}</h3>
           </div>
           @else
           <div class="card-header">
            <h3 class="card-title">Edit infomation</h3>
          </div>
          @endif
          <!-- /.card-header -->
          <form action="{{ route('users.update', $user->id) }}" method="post">
            @method('put')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" name="name" type="text" value="{{$user->name}}">
                
              </div>
              <div class="form-group">
                <label class="control-label">Email</label>
               
                <input class="form-control" name="email" type="email" value="{{$user->email}}">
              </div>
              <div class="form-group">
                <label class="control-label">Phone</label>
                
                <input class="form-control" name="phone" type="number" value="{{$user->phone}}">
              </div>
              <div class="form-group">
                <label class="control-label">Date_of_birth</label>
               
                <input class="form-control" name="date_of_birth" type="date" value="{{$user->date_of_birth}}">
              </div>

              <div class="form-group">
                <label class="control-label">Password</label>
                
                <input class="form-control" name="password" type="password" value="{{$user->password}}">
              </div>
              <div class="form-group">
                <label class="control-label">Chức Vụ</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" value="2" type="radio" name="role" @if($user->role == 2) checked @endif >Admin
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" value="1"  type="radio" name="role" @if($user->role == 1) checked @endif >User
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Trạng Thái</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" value="1"  type="radio" name="is_active" @if($user->is_active == 1) checked @endif >Hoạt Động
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" value="0" type="radio" name="is_active" @if($user->is_active == 0) checked @endif >Khóa
                  </label>
                </div>
              </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Lưu</button>
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