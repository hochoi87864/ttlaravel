@extends('layouts.app')
@section('content')
<style>
	.pro-rating .active{
        color:#ff9705 !important;
    }
	.ellipsis {
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
	.block-ellipsis {
	display: -webkit-box;
	max-width: 100%;
	height: 70px;
	margin: 0 auto;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
	overflow: hidden;
	text-overflow: ellipsis;
}
</style>
	<!-- start home slider -->
        <div class="slider-area an-1 hm-1">
             <!-- slider -->
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides" style="width:100%; margin: 0 auto;">	
					<img   src="{{asset('img/slider/home-1/slider1-2.png')}}" alt="" title="#slider-direction-1"  />
					<img  src="{{asset('img/slider/home-1/slider1-3.jpg')}}" alt="" title="#slider-direction-2"  />
					<img  src="{{asset('img/slider/home-1/slider1-5.jpg')}}" alt="" title="#slider-direction-2"  />
				</div>
				<!-- direction 1 -->
				{{-- <div id="slider-direction-1" class="t-cn slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-cn s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div> --}}
				<!-- direction 2 -->
				{{-- <div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl s-tb slider-2 lft-pr">
						<div class="title-container s-tb-c">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div> --}}
			</div>
			<!-- slider end-->
		</div>
        <!-- end home slider -->
		<!-- product section start -->
		<div class="our-product-area">
			<div class="container">
				<!-- area title start -->
				{{-- <div class="area-title">
					<h2>Our products</h2>
				</div> --}}
				<!-- area title end -->
				<!-- our-product area start -->
				{{-- <div class="row">
					<div class="col-md-12">
						<div class="features-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
								<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
							</ul>
							<!-- Tab pans -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<div class="row">
										<div class="features-curosel">
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-1.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-3.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-4.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$240.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-5.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$280.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-7.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$333.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-9.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$400.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$100.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-2.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$110.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-4.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-6.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-8.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$400.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-10.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$330.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$213.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$340.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
											</div>
											<!-- single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="profile">
									<div class="row">
										<div class="features-curosel">
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$110.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$200.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-8.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$370.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-10.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$170.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-2.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-4.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$350.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-6.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-9.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$180.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$310.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-5.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-7.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$178.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div> --}}
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- banner-area start -->
		{{-- <div class="banner-area">
			<div class="container-fluid">
				<div class="row">
					<a href=""><img src="img/banner/banner-1.jpg" alt="" /></a>
				</div>
			</div>
		</div> --}}
		<!-- banner-area end -->
		<!-- product section start -->
		<div class="our-product-area new-product">
			<div class="container">
				<div class="area-title">
					<h2>Sản phẩm mới và Hot</h2>
				</div>
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="features-curosel">
								
								@if(isset($productHot))
								@foreach($productHot as $prohot)
								<!-- single-product start -->	
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											@if($prohot->pro_number == 0)
											<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
											@endif
											@if($prohot->pro_sale != 0)
												<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
													Giảm giá -{{$prohot->pro_sale}}%
												</span>
											@endif
											<a href="{{route('get.detail.product',[$prohot->pro_slug,$prohot->id])}}">
												<img class="primary-image" style="width:270px;height:330px" src="{{asset('upload/pro_avatar/'.$prohot->pro_avatar)}}" alt="" />
												{{-- <img class="secondary-image" style="width:270px;height:330px" src="{{asset('upload/pro_avatar/'.$prohot->pro_avatar)}}" alt="" /> --}}
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="{{route('get.detail.product',[$prohot->pro_slug,$prohot->id])}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="{{route('get.favorite.product',$prohot->id)}}" class="add_product_to_favorite_list" data-pro_id ="{{$prohot->id}}" data-pro_name="{{$prohot->pro_name}}" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="{{route('add.shopping.cart',$prohot->id)}}" class="add_product_to_cart" data-pro_id ="{{$prohot->id}}" data-pro_name="{{$prohot->pro_name}}" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													{{-- <div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div> --}}
												</div>
											</div>
											<div class="price-box">
												@if($prohot->pro_sale>0)
													<span class="new-price" style="margin-left: 0px;"><strike>{{number_format($prohot->pro_price,0,',','.')}} VNĐ</strike></span><br/>
													<span class="new-price">{{number_format($prohot->pro_price*(100 - $prohot->pro_sale)/100,0,',','.')}} VNĐ</span>
												
												@else
													<span class="new-price">{{number_format($prohot->pro_price,0,',','.')}} VNĐ</span>
												
												@endif
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name ellipsis"><a href="#">{{$prohot->pro_name}}</a></h2>
											<p class="block-ellipsis">{{$prohot->pro_description}}</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								@endforeach
								@endif
							</div>
						</div>	
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- latestpost area start -->
		@if(isset($articleNews))
		<div class="latest-post-area">
			<div class="container">
				<div class="area-title">
					<h2>Bài viết mới</h2>
				</div>
				<div class="row">
					<div class="all-singlepost">
						<!-- single latestpost start -->
						@foreach($articleNews as $ARN)
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:40px">
							<div class="single-post">
								<div class="post-thumb">
									<a href="{{route('get.detail.article',[$ARN->a_slug,$ARN->id])}}">
										<img style="width:370px;height:280px" src="{{asset('upload/a_avatar/'.$ARN->a_avatar)}}" alt="" />
									</a>
								</div>
								<div class="post-thumb-info">
									<div class="post-time">
										{{-- <a href="#">Beauty</a> --}}
										{{-- <span>/</span> --}}
										<span>Đăng bởi</span>
										<span>Admin</span>
									</div>
									<div class="postexcerpt">
										<p style="height:30px;">{{$ARN->a_name}}</p>
										<a href="{{route('get.detail.article',[$ARN->a_slug,$ARN->id])}}" class="read-more" style="margin-top:50px;">Xem thêm</a>
									</div>
									
								</div>
							</div>							
					
						</div>
						@endforeach
						<!-- single latestpost end -->
					</div>
				</div>
			</div>
		</div>			
		@endif
		<!-- latestpost area end -->
		<!-- block category area start -->
		<div class="block-category">
			<div class="container">
				<div class="row">
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Bán chạy nhất</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								@foreach($product_best_pay as $prb)
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left" style="position: relative">
										<a href="{{route('get.detail.product',[$prb->pro_slug,$prb->id])}}">
											@if($prb->pro_number == 0)
											<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
											@endif
											@if($prb->pro_sale != 0)
												<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
													Giảm giá -{{$prb->pro_sale}}%
												</span>
											@endif
											<img style="width:170px;height:208px" src="{{asset('upload/pro_avatar/'.$prb->pro_avatar)}}" alt="" />
										</a>
									</div>
									<div class="category-info">
										<h3 class="ellipsis"><a href="{{route('get.detail.product',[$prb->pro_slug,$prb->id])}}">{{$prb->pro_name}}</a></h3>
										<p class="block-ellipsis">{{$prb->pro_description}}</p>
										@if($prb->pro_sale>0)
											<div class="cat-price"><span class="old-price">{{number_format($prb->pro_price,0,',','.')}} VNĐ</span><br/>{{number_format($prb->pro_price*(100 - $prb->pro_sale)/100,0,',','.')}} VNĐ</div>
										@else
											<div class="cat-price" style="height: 36px">{{number_format($prb->pro_price,0,',','.')}} VNĐ</div>
										@endif
										<?php
											$point= 0;
											if($prb->pro_total_rating>0){
												$point= round($prb->pro_total_number/$prb->pro_total_rating);
											}
										?>
										<div class="pro-rating">
											@for($i=1; $i <= 5; $i++)
												<i class="fa fa-star {{ $i<=$point ? 'active':''}}" style="color:#999"></i>
											@endfor
										</div>								
									</div>
								</div>										
								@endforeach
								<!-- single block end -->
								<!-- single block start -->
								{{-- <div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img style="width:170px;height:208px" src="{{asset('upload/pro_avatar/'.$prs->pro_avatar)}}" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div> --}}
								<!-- single block end -->
							</div>
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Giảm giá nhiều nhất</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								@foreach($product_best_sale as $prs)
								<div class="single-block">
									<div class="block-image pull-left" style="position: relative">
										<a href="{{route('get.detail.product',[$prs->pro_slug,$prs->id])}}">
											@if($prs->pro_number == 0)
											<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
											@endif
											@if($prs->pro_sale != 0)
												<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
													Giảm giá -{{$prs->pro_sale}}%
												</span>
											@endif
											<img style="width:170px;height:208px" src="{{asset('upload/pro_avatar/'.$prs->pro_avatar)}}" alt="" />
										</a>
									</div>
									<div class="category-info">
										<h3 class="ellipsis"><a href="{{route('get.detail.product',[$prs->pro_slug,$prs->id])}}" >{{$prs->pro_name}}</a></h3>
										<p class="block-ellipsis">{{$prs->pro_description}}</p>
										@if($prs->pro_sale>0)
											<div class="cat-price"><span class="old-price">{{number_format($prs->pro_price,0,',','.')}} VNĐ</span><br/>{{number_format($prs->pro_price*(100 - $prs->pro_sale)/100,0,',','.')}} VNĐ</div>
										@else
											<div class="cat-price" style="height: 36px">{{number_format($prs->pro_price,0,',','.')}} VNĐ</div>
										@endif
										<?php
											$point= 0;
											if($prs->pro_total_rating>0){
												$point= round($prs->pro_total_number/$prs->pro_total_rating);
											}
										?>
										<div class="pro-rating">
											@for($i=1; $i <= 5; $i++)
												<i class="fa fa-star {{ $i<=$point ? 'active':''}}" style="color:#999"></i>
											@endfor
										</div>						
									</div>
								</div>
								@endforeach
								<!-- single block end -->
								<!-- single block start -->
								{{-- <div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-10.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div> --}}
								<!-- single block end -->
							</div>
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Hàng vừa nhập</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								@foreach($product_news as $prn)
								<div class="single-block">
									<div class="block-image pull-left" style="position: relative">
										@if($prn->pro_number == 0)
										<span style="position: absolute; background-color:#e74a3b; color:white; padding:5px 10px; font-size:12px; border-radius:10px">Hết hàng</span>
										@endif
										@if($prn->pro_sale != 0)
											<span style="position: absolute;bottom:0%;left: 0%;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 5px;padding: 0px 6px;padding-left: 0px;padding-right: 10px; color:white">
												Giảm giá -{{$prn->pro_sale}}%
											</span>
										@endif
										<a href="{{route('get.detail.product',[$prn->pro_slug,$prn->id])}}"><img style="width:170px;height:208px" src="{{asset('upload/pro_avatar/'.$prn->pro_avatar)}}" alt="" /></a>
									</div>
									<div class="category-info">
										<h3 class="ellipsis"><a href="{{route('get.detail.product',[$prn->pro_slug,$prn->id])}}">{{$prn->pro_name}}</a></h3>
										<p class="block-ellipsis">{{$prn->pro_description}}</p>
										@if($prn->pro_sale>0)
										<div class="cat-price"><span class="old-price">{{number_format($prn->pro_price,0,',','.')}} VNĐ</span><br/>{{number_format($prn->pro_price*(100 - $prn->pro_sale)/100,0,',','.')}} VNĐ</div>
										@else
											<div class="cat-price" style="height: 36px">{{number_format($prn->pro_price,0,',','.')}} VNĐ</div>
										@endif
										<?php
											$point= 0;
											if($prn->pro_total_rating>0){
												$point= round($prn->pro_total_number/$prn->pro_total_rating);
											}
										?>
										<div class="pro-rating">
											@for($i=1; $i <= 5; $i++)
												<i class="fa fa-star {{ $i<=$point ? 'active':''}}" style="color:#999"></i>
											@endfor
										</div>
										{{-- <div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								 --}}
									</div>
								</div>									
								@endforeach
								<!-- single block end -->
								{{-- <!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end --> --}}
							</div>
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
							{{-- <div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div> --}}
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
				</div>
			</div>
		</div>
		<!-- block category area end -->
		<!-- testimonial area start -->
		<div class="testimonial-area lap-ruffel">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="crusial-carousel">
							<div class="crusial-content">
								<p>“Thích thì mua mà không thích thì mua"</p>
								<span>Tiger Trần</span>
							</div>
							<div class="crusial-content">
								<p>“Tài sản giá trị nhất của công ty bạn chính là cách mà khách hàng biết đến nó !"</p>
								<span>Brian Tracy</span>
							</div>
							
							<div class="crusial-content">
								<p>“Tôi tự hào vì những gì chúng tôi không làm cũng như tôi tự hào vì những gì chúng tôi đã làm"</p>
								<span>Steve Jobs</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial area end -->
		{{-- custom check account --}}

		{{-- custom check account --}}
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
		<script>
			$(function(){
				$(".add_product_to_favorite_list").click(function(event){
					event.preventDefault();
					var pro_id = $(this).attr('data-pro_id');
					var url1 = $(this).attr('href');
					var name = $(this).attr('data-pro_name');
					$.ajax({
						method: "GET",
						url :url1,
						data : {id: pro_id}
					}).done(function(result){
						if(result.error) {
							window.location.href = 'dang-nhap'
						}
						else {
							if(result.success==1){
								swal("Thành công !", "Bạn đã thêm "+name+" vào danh sách yêu thích của bạn !!", "success");
							}
							else{
								swal("Đã tồn tại !", "Sản phẩm "+name+" đã có trong danh sách yêu thích của bạn !!", "warning");
							}
						}
					});
				});
			});
		</script>
@endsection