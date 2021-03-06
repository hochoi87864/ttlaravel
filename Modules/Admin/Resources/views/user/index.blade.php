@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Thành viên</li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
    </ol>
</div>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Quản lý thành viên</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
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
        <strong>Thất bại! </strong> {{\Session::get('error')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(\Session::has('changePassword'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thành công! </strong> {{\Session::get('changePassword')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		  @endif
      <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Tên hiển thị</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Quyền hạn</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($users))
            @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                  @if($user->role == 1)
                    <a href="{{route('admin.get.acion.user',['changerole',$user->id])}}"><span class="badge badge-success">Admin</span></a>
                  @else
                    <a href="{{route('admin.get.acion.user',['changerole',$user->id])}}"><span class="badge badge-secondary">Member</span></a>
                  @endif
                </td>
                <td>
                  <a href="{{route('admin.get.change.password',[$user->id])}}"  class="btn btn-warning btn-circle btn_change_password"><i class="fas fa-key"></i></a>
                  <a href="{{route('admin.get.edit.user',[$user->id])}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a> 
                  <a href="{{route('admin.get.acion.user',['delete',$user->id])}}"  class="btn btn-danger btn-circle sweet_delete"><i class="fas fa-trash-alt"></i></a>
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
    $('#dataTable').DataTable();
  });
</script>
<script>
  $(document).ready( function () {
    $(".sweet_delete").click(function(event){
      var url = $(this).attr('href');
      console.log(url);
      event.preventDefault();
      swal({
        title: "Bạn muốn xóa người này khỏi danh sách thành viên chứ ?",
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