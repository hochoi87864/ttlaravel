@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Loại sản phẩm</li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
    </ol>
</div>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Quản lý loại sản phẩm</h6>
  </div>
  <div class="card-body">
    @if(\Session::has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thành công! </strong> {{\Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(\Session::has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Thất bại! </strong> {{\Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		  @endif
    <div class="table-responsive">
      <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($categories))
            @foreach($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->c_name}}</td>
                <td>
                  <a href="{{route('admin.get.edit.category',$category->id)}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>&nbsp 
                  <a href="{{route('admin.get.acion.category',['delete',$category->id])}}" class="btn btn-danger btn-circle sweet_delete"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
@section('script')
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable({
      "order": [[ 0, "desc" ]]
    });
  });
</script>
<script>
  $(document).ready( function () {
    $(".sweet_delete").click(function(event){
      var url = $(this).attr('href');
      console.log(url);
      event.preventDefault();
      swal({
        title: "Bạn muốn xóa loại sản phẩm này chứ ?",
        text: "Điều này sẽ ảnh hưởng đến một số dữ liệu liên quan như sản phẩm,đánh giá, đơn hàng...",
        type: "warning",
        showCancelButton: true,
        cancelButtonClass: 'btn-success',
        cancelButtonText: "Thôi không xóa đâu !",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Tôi vẫn muốn Xóa !",
        closeOnConfirm: false
      },
      function(isConfirm){
        if (isConfirm) {
          window.location.href = url;
          swal("Đã xóa!", "Xóa thành công rồi nhé.", "success");
        }
      });
    });
  });
</script>
@endsection