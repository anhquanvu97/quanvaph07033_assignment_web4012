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
            <div class="card-header">
              <h3 class="card-title">Categories detail</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label class="control-label">Tên Danh Mục</label>
                <input class="form-control" name="name" type="text" value="{{ $category->name }}" readonly>
              </div>

              <div class="form-group">
                <label class="control-label">Người Tạo</label>
                <input class="form-control" name="name" type="text" value="{{ $category->ShowNameUser['name'] }}" readonly>
              </div>

              <div class="form-group">
                <label class="control-label">Ngày Tạo</label>
                <input class="form-control" name="name" type="text" value="{{ carbon\carbon::parse($category->created_at)->format('d-m-Y') }}" readonly>
              </div>

              <div class="form-group">
                <label class="control-label">Ngày Update</label>
                <input class="form-control" name="name" type="text" value="{{ carbon\carbon::parse($category->updated_at)->format('d-m-Y') }}" readonly>
              </div>
            </div>
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