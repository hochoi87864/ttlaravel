@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Giao dịch</li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
    </ol>
</div>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Quản lý giao dịch</h6>
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
      <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th style="width:70px">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($transactions))
            @foreach($transactions as $transaction)
              <tr>
                <td>{{$transaction->id}}</td>
                <td>{{$transaction->User->name}}</td>
                <td>{{$transaction->tr_address}}</td>
                <td>{{$transaction->tr_phone}}</td>
                <td>{{number_format($transaction->tr_total,0,',','.')}} VND</td>
                <td>
                    @if($transaction->tr_status==2)
                      <a href="#"><span class="badge badge-success">Đã nhận hàng</span></a>
                    @endif
                    @if($transaction->tr_status==1)
                      <a href="{{route('admin.handle.transaction',$transaction->id)}}"><span class="badge badge-warning">Đã gửi hàng</span></a>
                    @endif
                    @if($transaction->tr_status==0)
                      <a href="{{route('admin.get.acion.transaction',['send',$transaction->id])}}"><span class="badge badge-danger">Chưa xử lý</span></a>
                    @endif
                </td>
                <td>
                  <a href="{{route('admin.get.view.order',$transaction->id)}}" data-id="{{$transaction->id}}" class="btn btn-info btn-sm btn-circle js_order_item" alt="Xem chi tiết">
                    <i class="fas fa-eye"></i>
                  </a>
                  @if($transaction->tr_status==0)
                    <a href="{{route('admin.get.acion.transaction',['delete',$transaction->id])}}" class="btn btn-danger btn-sm btn-circle sweet_delete">
                      <i class="fas fa-trash"></i>
                    </a>
                  @endif
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
{{-- ---- --}}
<div class="modal fade" id="myModalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height:78px;">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #<b class="transaction_id"></b></h5>
        <button type="button" style="margin-top:-10px" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_content">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script>
    $(function(){
      $(".js_order_item").click(function(event){
        event.preventDefault();
        let $this = $(this);
        let url1 =$this.attr('href');
        console.log(url1);
        $(".transaction_id").text('').text($this.attr('data-id'));
        $("#myModalOrder").modal("show");
        $.ajax({url: url1,}).done(function(result){
          console.log(result);
          if(result){
            $("#modal_content").html('').append(result);
          }
        });
      });
    })
  </script>
  <script>
    $(document).ready( function () {
      $('#dataTable').DataTable({
        "order": [[ 5, "asc" ]]
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