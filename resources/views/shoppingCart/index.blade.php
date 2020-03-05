@extends('layouts.app')
@section('content')

<?php $i=1?>
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
									<a href="index.html">Giỏ hàng</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Shop List</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
<div class="our-product-area new-product">

	<div class="container">
		<div class="area-title">
			<h2>Giỏ hàng của bạn</h2>
        </div>
        <div style="margin:0 auto">
        @if(\Session::has('success'))
			<div class="alert alert-success alert-dismissible fade in col-sm-6 col-sm-offset-3" >
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Thành công !!! </strong>{{\Session::get('success')}}.
		  </div>
		@endif
		@if(\Session::has('warning'))
			<div class="alert alert-warning alert-dismissible fade in col-sm-6 col-sm-offset-3">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Thất bại !!! </strong>{{\Session::get('warning')}}.
		  </div>
        @endif
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                    <th scope="col">STT</th>
                    <th scope="col" style="width:30%">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th style="text-align: center">Cập nhật số lượng</th>
                    <th scope="col">Thao tác</th>
            </thead>
            <tbody>
            @if($products)
            @foreach($products as $key=>$product)
                <tr>
                    <th scope="col">{{$i++}}</th>
                    <td>{{$product->name}}</td>
                    <td><img style="width:80px;height:60px" src="{{asset('upload/pro_avatar/'.$product->options->avatar)}}"/></td>
                    <td>{{number_format($product->price,0,',','.')}}</td>
                    <td data-id="$product->qty" class="qty_product_cart">{{$product->qty}}</td>
                    <td>{{number_format($product->price * $product->qty,0,',','.')}}</td>
                    <td style="text-align:center">
                        <form action="{{route('get.edit.shopping.cart')}}" method="POST" class="form-inline">
                            @csrf
                            <input type="hidden" name="pro_id" value="{{$product->id}}"/>
                            <input type="number" id="number_product" required min="1" max="10" value={{$product->qty}} name="number_edit" class="form-control" style="width:60px"/>
                            <button type="submit" class="btn btn-primary sweet_edit"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                        </form></td>
                    <td>
                        <a href="{{route('get.delete.shopping.cart',$key)}}" class="btn btn-danger sweet_delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>     
            @endforeach              
            @endif
            </tbody>
        </table>
        <h5 class="pull-right">Tổng tiền thanh toán: {{\Cart::subtotal()}} đ <a href="{{route('get.form.pay')}}" class="btn btn-success">Thanh toán</a></h5>
        
    </div>		
</div>
@endsection
@section('script')
    <script>
        $(function(){
            $(".sweet_delete").click(function(event){
                var url = $(this).attr('href');
                console.log(url);
                event.preventDefault();
                swal({
                title: "Bạn muốn xóa sản phẩm này khỏi giỏ hàng chứ ?",
                text: "Sản phẩm này sẽ bị xóa khỏi giỏ hàng của bạn !",
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
                    window.location.href = url;
                    swal("Đã xóa!", "Xóa thành công rồi nhé.", "success");
                }
                });
            });
        });
    </script>
    {{-- <script>
        $(function(){
            $(".sweet_edit").prop('disabled', true);
            $("#number_product").change(function(event){
                $(this).$(".sweet_edit").prop('disabled', false);
            })
        });
    </script> --}}
    {{-- <script>
        $(function(){
            $(".sweet_edit").click(function(event){
                var number_product = $("#number_product").val();
                console.log(number_product);
                if(number_product>0 && number_product<11){
                    swal("Thành công!", "Bạn đã cập nhật thành công!", "success")
                }
                else
                    swal("Lỗi!", "Bạn chỉ được mua từ 1-10 sản phẩm !!!","error")
            });
        });
    </script> --}}
@endsection