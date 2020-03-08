@extends('backend.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách người dùng</h1>
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
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Số ĐT</th>
                  <th>Trạng Thái</th>
                  <th>Vai Trò</th>
                  <th><a href="{{ route('users.create') }}" class="btn btn-success" >Thêm</a></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>@if($user->is_active==0)<span style="color: red">Khóa</span>@else<span style="color: blue">Hoạt Động</span>@endif</td>
                  <td>@if($user->role==1) User @else Admin @endif</td>
                  <th>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a  class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <button onclick="return window.confirm('Are you sure?');" type="submit" class="btn btn-danger">Xóa</button>
                </form>
                  </th>
                </tr>
                @endforeach
              </table>
              <style type="text/css">
              .pagination{padding:0px; margin:0px;}
            </style>
            {{$users->render()}}
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
  <!-- /.content-wrapper -->
  @endsection

