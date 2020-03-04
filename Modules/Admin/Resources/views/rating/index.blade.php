@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
    </ol>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Quản lý đánh giá</h6>
  </div>
  <div class="card-body">
      {{-- <form class=" form-inline" style="justify-content: center;" action="">
            <div class="input-group col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Search for..." value="{{\Request::get('name')}}">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>   
      </form> --}}
    <div class="table-responsive mt-3">
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
      <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Người đánh giá</th>
            <th>Sản phẩm</th>
            <th>Nội dung</th>
            <th>Rating</th>
            <th>Ngày tạo</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
            @foreach($ratings as $rating)
              <tr>
                <td>{{$rating->id}}</td>
                <td>{{$rating->User->name}}</td>
                <td>{{$rating->Product->pro_name}}</td>
                <td>{{$rating->ra_content}}</td>
                <td>{{$rating->ra_number}} sao</td>
                <td>{{$rating->created_at}}</td>
                <td>
                  <a href="{{route('admin.get.acion.rating',['delete',$rating->id])}}" class="btn btn-danger btn-circle sweet_delete"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            @endforeach
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
        title: "Bạn muốn xóa đánh giá này chứ ?",
        text: "Điều này sẽ ảnh hưởng đến lòng tin của khách hàng",
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