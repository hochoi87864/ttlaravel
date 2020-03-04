@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
								<a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Nhật ký giao dịch</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div><h1 style="text-align: center">Nhật ký giao dịch</h1></div>
        <table class="table table-hover table-bordered" style="width: 1000px; margin: 0 auto" id="dataTable" cellspacing="0">
          <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th style="text-align: center">Tên khách hàng</th>
                <th style="text-align: center">Địa chỉ</th>
                <th style="text-align: center">Số điện thoại</th>
                <th style="text-align: center">Tổng tiền</th>
                <th style="text-align: center">Tình trạng</th>
                <th style="text-align: center; width:132px">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($transactions))
                @foreach($transactions as $transaction)
                  <tr>
                    <td >{{$transaction->id}}</td>
                    <td style="text-align: center">{{$transaction->User->name}}</td>
                    <td style="text-align: center">{{$transaction->tr_address}}</td>
                    <td style="text-align: center">{{$transaction->tr_phone}}</td>
                    <td style="text-align: center">{{number_format($transaction->tr_total,0,',','.')}} VND</td>
                    <td>
                      @if($transaction->tr_status == 1)
                        <a href="{{route('history.revecie.product',$transaction->id)}}"><span class="label label-warning">Đã gửi hàng</span></a>
                      @elseif($transaction->tr_status == 2)
                        <a href="#"><span class="label label-success">Đã nhận hàng</span></a>
                      @else
                        <a href="#"><span class="label label-danger ">Chưa xử lý</span></a>
                      @endif
                    </td>
                    <td style="text-align: center">
                      <a href="{{route('history.get.view.order',$transaction->id)}}" data-id="{{$transaction->id}}" class="btn btn-info btn-sm btn-circle js_order_item" alt="Xem chi tiết">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      @if($transaction->tr_status == 0)
                        <a href="{{route('history.delete.transaction',[$transaction->id])}}" class="btn btn-danger btn-sm btn-circle sweet_delete">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
          <div class="modal fade" id="myModalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #<b class="transaction_id"></b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
          {{-- ---- --}}
          <!-- Modal -->
@endsection
@section('script')
  <script>
    $(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
    });
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
      $(".sweet_delete").click(function(event){
            var url = $(this).attr('href');
            event.preventDefault();
            swal({
            title: "Hủy giao dịch này !!!",
            text: "Vì giao dịch này chưa được bên mình chuyển hàng lên bạn có thể hủy giao dịch ! Bạn chắc chứ ?",
            type: "warning",
            showCancelButton: true,
            cancelButtonClass: 'btn-danger',
            cancelButtonText: "Không đồng ý",
            confirmButtonClass: "btn-success",
            confirmButtonText: "Đồng ý !",
            closeOnConfirm: false
            },
            function(isConfirm){
            if (isConfirm) {
              swal("Hoàn tất !!! ", "Bạn đã hủy giao dịch thành công", "success");
              window.location.href = url; 
            }
            });
        });
    });
  </script>

@endsection
