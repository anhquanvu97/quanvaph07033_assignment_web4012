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

            <!-- /.card-header -->
            <!-- form start -->
            @if(session('thongbao'))
            <div class="card-header">
             <h3 class="card-title">{{ session('thongbao') }}</h3>
           </div>
           @else
           <div class="card-header">
            <h3 class="card-title">Thêm người dùng</h3>
          </div>
          @endif
          <div class="tile-body">
            <form action="{{ route('users.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <br>
                  
                  <input class="form-control" name="name" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <br>
                  
                  <input class="form-control" name="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Phone</label>
                  <br>
                  
                  <input class="form-control" name="phone" type="number" placeholder="Enter  phone">
                </div>
                <div class="form-group">
                  <label class="control-label">Date_of_birth</label>
                  <br>
                  
                  <input class="form-control" name="date_of_birth" type="date" placeholder="Enter date_of_birth">
                </div>
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <br>
                  
                  <input class="form-control" name="password" type="password" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Chức Vụ</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="2" type="radio" name="role">Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" checked type="radio" name="role">User
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Trạng Thái</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" checked type="radio" name="is_active">Hoạt Động
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="0" type="radio" name="is_active">Khóa
                    </label>
                  </div>
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
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