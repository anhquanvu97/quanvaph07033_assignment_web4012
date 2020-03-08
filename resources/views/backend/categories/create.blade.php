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
            @if(session('thongbao'))
            <div class="card-header">
              <h3 class="card-title">{{ session('thongbao') }}</h3>
            </div>
            @else
            <div class="card-header">
              <h3 class="card-title">Add category</h3>
            </div>
            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categories.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label class="control-label">Tên Danh Mục</label>
                  <br>
                  
                  <input class="form-control" name="name" type="text" placeholder="Enter full name">
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