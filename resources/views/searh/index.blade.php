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
								<li class="category3"><span>Tìm kiếm</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- shop-with-sidebar Start -->
		<div class="shop-with-sidebar">
			<div class="container">
				<div class="row">
                    <div><h1 style="text-align: center">Danh sách sản phẩm tìm kiếm</h1></div>
                    <hr/>
					<!-- left sidebar start -->
					<!-- left sidebar end -->
					<!-- right sidebar start -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="shop-grid-tab">
								<div class="row" style="margin-top: 0px;">
									<div class="shop-product-tab first-sale">
                                        @foreach($products as $product )
										<div class="col-lg-3 col-md-3 col-sm-3">
											<div class="two-product">
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														@if($product->pro_number == 0)
														<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
														@endif
														@if($product->pro_sale != 0)
															<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
																
															</span>
														@endif
														<a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
															@if($product->pro_number == 0)
															<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
															@endif
															@if($product->pro_sale != 0)
																<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
																	Giảm giá -{{$product->pro_sale}}%
																</span>
															@endif
															<img class="primary-image" style="width:269.98px;height:329.97px" src="{{asset('upload/pro_avatar/'.$product->pro_avatar)}}" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	{{-- <div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div> --}}
																	<div class="compare-button">
																		<a href="{{route('add.shopping.cart',$product->id)}}" class="add_product_to_cart" data-pro_id ="{{$product->id}}" data-pro_name="{{$product->pro_name}}" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																{{-- <div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div> --}}
															</div>
														</div>
														<div class="price-box">
															@if($product->pro_sale>0)
																<span class="new-price" style="margin-left: 0px;"><strike>{{number_format($product->pro_price,0,',','.')}} VNĐ</strike></span><br/>
																<span class="new-price">{{number_format($product->pro_price*(100 - $product->pro_sale)/100,0,',','.')}} VNĐ</span>
															
															@else
																<span class="new-price">{{number_format($product->pro_price,0,',','.')}} VNĐ</span>
															
															@endif
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">{{$product->pro_name}}</a></h2>
														<p style="white-space: nowrap; width: 250px; overflow: hidden;text-overflow: ellipsis; ">{{$product->pro_description}}</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
										@endforeach
									</div>
								</div>
								<!-- product-row end -->
							</div>
							<!-- list view -->

							<!-- shop toolbar start -->
							<div style="text-align: center"> {{$products->links()}}</div>
							<!-- shop toolbar end -->
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>
		<!-- shop-with-sidebar end -->
@endsection
@section('script')
		<script>
			$(function(){
				$(".add_product_to_cart").click(function(event){
					var pro_id = $(this).attr('data-pro_id');
					var url1 = $(this).attr('href');
					var name = $(this).attr('data-pro_name');
					console.log(url1);
					event.preventDefault();
					$.ajax({
						method: "GET",
						url :url1,
						data : {id: pro_id}
					}).done(function(result){
						if(result.success == 1 ){
							swal("Thành công !", "Bạn đã thêm "+name+" vào giỏ hàng !!", "success");
							$(".cart-quantity").text(result.cart_count);
						}
						else if(result.success == 0){
							swal("Không đủ số lượng hàng !", "Chỉ còn "+result.pro_number_in_stock+" sản phẩm "+name+" trong kho hàng !", "warning");
						}
						else{
							alert('lỗi r');
						}
					});
				});		
			});
		</script>
@endsection