@extends('admin.layouts.master')
@section ('title')
  Danh sách danh mục
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chỉnh sửa danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa danh mục</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection

@section ('content')
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Mô tả</th>
                      <th>Ảnh</th>
                      <th>Danh mục cha</th>
                      <th>Thời gian tạo</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td></td>
                        <td> <p style="width: 110px !important; white-space: normal;"></p> </td>
                        <td></td>
                        <td>
                            <img src="assets/Admin/uploads/" width="100%" height="100px" style="border-radius: 5px; object-fit: cover;">
                        </td>
                        <td> <p style="width: 100px !important; white-space: normal;"></p> </td>
                        <td></td>
                        <td>
                            <a href="{{ route('admin.categories.show',1) }}" class="btn btn-danger">Show</a>
                            <a href="{{ route('admin.categories.edit',1) }}" class="btn btn-success">Chỉnh sửa</a>
                            <a href="{{ route('admin.categories.destroy',1) }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection

@section ('scrip')
  
@endsection