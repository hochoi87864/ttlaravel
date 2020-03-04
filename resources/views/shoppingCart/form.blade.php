@extends('layouts.app')
@section('content')
<!-- breadcrumbs area start -->
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
								<li class="home">
                                <a href="{{route('get.list.shopping.cart')}}">Giỏ hàng</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Xác nhận</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
<div class="container wrapper">
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="" id="form_pay">
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Danh sách yêu cầu <div class="pull-right"><small><a class="afix-1" href="{{route('get.list.shopping.cart')}}">Cập nhật lại số lượng</a></small></div>
                        </div>
                        <div class="panel-body">
                            @foreach($products as $product)
                                <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="{{asset('upload/pro_avatar/'.$product->options->avatar)}}" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">{{$product->name}}</div>
                                    <div class="col-xs-12"><small>Số lượng: <span>{{$product->qty}}</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6>{{number_format($product->price,0,',','.')}}<span> VNĐ</span></h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            @endforeach
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng tiền:</strong>
                                    <div class="pull-right" style="font-size: 26px;"><span><b>{{\Cart::subtotal()}}</b></span><span>VNĐ</span></div>
                                </div>
                                {{-- <div class="col-xs-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div> --}}
                            </div>
                            {{-- <div class="form-group"><hr /></div> --}}
                            {{-- <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$</span><span>150.00</span></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" required class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="email" value="{{get_data_user('web','email')}}" class="form-control"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12"><input type="text" required name="phone" class="form-control" value="{{get_data_user('web','phone')}}" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                <div class="col-md-12"><textarea class="form-control" cols="30" rows="6" name="note"></textarea></div>
                            </div>
                            <div class="form-group" style="padding-right:10px" >
                                <div class="col-md-12 "><input type="submit" class="btn btn-success pull-right sweet_buy" value="Xác nhận"/></div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    </div>
@endsection
@section('script')
<script>
    $(function(){  
           $(".sweet_buy").click(function(event){
            var form = $(this).parents('form');
            event.preventDefault();
            swal({
            title: "Xác nhận mua hàng !!!",
            text: "Sản phẩm sẽ được chuyển tới địa chỉ của bạn !! Bạn cần xác nhận tại nhật ký giao dịch khi giao dịch để nhận hàng ! Xin cảm ơn khi sử dụng dịch vụ của chúng tôi !",
            type: "info",
            showCancelButton: true,
            cancelButtonClass: 'btn-danger',
            cancelButtonText: "Không đồng ý",
            confirmButtonClass: "btn-success",
            confirmButtonText: "Đồng ý !",
            closeOnConfirm: false
            },
            function(isConfirm){
            if (isConfirm) {
                // window.location.href = url;
                swal("Hoàn tất !!! ", "Mua hàng hoàn tất", "success");
                form.submit();
            }
            });
        });
    });
</script>
@endsection