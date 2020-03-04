@extends('layouts.app')
@section('content')
		<!-- breadcrumbs area start -->
<style>
	.ellipsis {
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
	.block-ellipsis {
	display: -webkit-box;
	max-width: 100%;
	height: 43px;
	margin: 0 auto;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	overflow: hidden;
	text-overflow: ellipsis;
}
</style>
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
								<li class="category3"><span>{{$cateProduct->c_name}}</span></li>
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
					<!-- left sidebar start -->
					<div class="col-md-3 col-sm-12 col-xs-12 text-left">
						<div class="topbar-left">
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="{{asset('img/bar-ping.png')}}" alt=""></div>
									<h2>{{$cateProduct->c_name}}</h2>
								</div>
							</aside>
							{{-- <aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Categories</h6>
								</div>
								<ul class="sidebar-tags">
									<li><a href="#">Acsessories</a><span> (14)</span></li>
									<li><a href="#">Afternoon</a><span> (14)</span></li>
									<li><a href="#">Attachment</a><span> (14)</span></li>
									<li><a href="#">Beauty</a><span> (14)</span></li>
								</ul>
							</aside> --}}
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Sắp xếp theo</h6>
								</div>
								<ul>
									{{-- <li><a href="#">Not available</a><span> (1)</span></li>
									<li><a href="#">In stock</a><span> (2)</span></li> --}}
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=az">Theo chữ cái A-Z</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=za">Theo chữ cái Z-A</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=mn">Sản phẩm mới trước</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=cn">Sản phẩm cũ trước</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=td">Giá tăng dần</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=gd">Giá giảm dần</a></li>
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Khoảng giá</h6>
								</div>
								<ul>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=1">Dưới 1.000.000 VNĐ</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=2">1.000.000 - 5.000.000 VNĐ</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=3">5.000.000 - 10.000.000 VNĐ</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=4">10.000.000 - 20.000.000 VNĐ</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=5">20.000.000 - 50.000.000 VNĐ</a></li>
									<li><a href="{{route('get.list.product',[$cateProduct->c_slug,$cateProduct->id])}}?price=6">Trên 50.000.000 VNĐ</a></li>
								</ul>
							</aside>		
						</div>
					</div>
					<!-- left sidebar end -->
					<!-- right sidebar start -->
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- shop toolbar start -->
						{{-- <div class="shop-content-area">
							<div class="shop-toolbar">
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											<label>Sort By</label>
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by newness</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
								<div class="col-md-4 col-sm-4 none-xs text-center">
									<div class="limiter hidden-xs">
										<label>Show</label>
										<select>
											<option selected="selected" value="">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select>
										per page        
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
									<div class="view-mode">
										<label>View on</label>
										<ul>
											<li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
											<li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> --}}
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="shop-grid-tab">
								<div class="row" style="margin-top: -88px;">
									<div class="shop-product-tab first-sale">
                                        @foreach($products as $product )
										<div class="col-lg-4 col-md-4 col-sm-4">
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
																		<a href="{{route('add.shopping.cart',$product->id)}}" data-pro_id ="{{$product->id}}" data-pro_name="{{$product->pro_name}}"  class="add_product_to_cart" title="Add to Cart"><i class="icon-bag"></i></a>
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
														<h2 class="product-name"><a href="#" class="ellipsis">{{$product->pro_name}}</a></h2>
														<div class="block-ellipsis">{{$product->pro_description}}</div>
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