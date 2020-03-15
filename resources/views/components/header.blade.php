<header class="short-stor">
			<div class="container-fluid">
				<div class="row">
					<!-- logo start -->
					<div class="col-md-3 col-sm-12 text-center nopadding-right">
						<div class="top-logo">
							<a href="{{route('home')}}" ><img style="width: 50%;" src="{{asset('img/thuctap1.png')}}" alt="" /></a>
						</div>
					</div>
					<!-- logo end -->
					<!-- mainmenu area start -->
					<div class="col-md-6 text-center">
						<div class="mainmenu">
							<nav>
								<ul>
									<li class="expand"><a href="{{route('home')}}">Trang chủ</a></li>
                                    <li class="expand">
                                        <a>Sản phẩm</a>
                                        <ul class="restrain sub-menu">
                                            @if(isset($categories))
                                                @foreach($categories as $category)
                                                    <li><a href="{{route('get.list.product',[$category->c_slug,$category->id])}}">{{$category->c_name}}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
									<li class="expand"><a href="{{route('get.list.article')}}">Tin tức</a></li>
									<li class="expand"><a href="{{route('get.contact')}}">Giới thiệu</a></li>
                                    <li class="expand"><a href="{{route('get.contact')}}">Liên hệ</a></li>
									{{-- <li class="expand"><a href="#">Pages</a>
										{{-- <ul class="restrain sub-menu">
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="product-details.html">Product Details</a></li>
											<li><a href="shop-grid.html">Shop Grid</a></li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li><a href="cart.html">Shopping cart</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="404.html">404 Error</a></li>
										</ul>									
									</li>
									<li class="expand"><a href="about-us.html">About</a></li>
									<li class="expand"><a href="contact-us.html">Contact</a></li> --}}
								</ul>
							</nav>
						</div>
						<!-- mobile menu start -->
						<div class="row">
							<div class="col-sm-12 mobile-menu-area">
								<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
									<span class="mobile-menu-title">Menu</span>
									<nav>
										<ul>
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index-2.html">Home 2</a></li>
													<li><a href="index-3.html">Home 3</a></li>
													<li><a href="index-4.html">Home 4</a></li>
													<li><a href="index-5.html">Home 5</a></li>
													<li><a href="index-6.html">Home 6</a></li>
													<li><a href="index-7.html">Home 7</a></li>
													<li><a href="index-8.html">Home 8</a></li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Man</a>
												<ul>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Coctail</a></li>
															<li><a href="shop-grid.html">Day</a></li>
															<li><a href="shop-grid.html">Evening </a></li>
															<li><a href="shop-grid.html">Sports</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
														<ul>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Table</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Kids</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
														<ul>
															<li><a href="shop-grid.html">T-Shirt</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jeans</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-list.html">Women</a>
												<ul>
													<li><a href="shop-grid.html">Rings</a>
														<ul>
															<li><a href="shop-grid.html">Coats & Jackets</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Rincoats</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Ankle Boots</a></li>
															<li><a href="shop-grid.html">Footwear</a></li>
															<li><a href="shop-grid.html">Clog Sandals</a></li>
															<li><a href="shop-grid.html">Combat Boots</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Accessories</a>
														<ul>
															<li><a href="shop-grid.html">Bootees bags</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Top</a>
														<ul>
															<li><a href="shop-grid.html">Briefs</a></li>
															<li><a href="shop-grid.html">Camis</a></li>
															<li><a href="shop-grid.html">Nigntwears</a></li>
															<li><a href="shop-grid.html">Shapewears</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Shop</a>
												<ul>
													<li><a href="shop-list.html">Shop Pages</a>
														<ul>
															<li><a href="shop-list.html">List View </a></li>
															<li><a href="shop-grid.html">Grid View</a></li>
															<li><a href="login.html">My Account</a></li>
															<li><a href="wishlist.html">Wishlist</a></li>
															<li><a href="cart.html">Cart </a></li>
															<li><a href="checkout.html">Checkout </a></li>
														</ul>
													</li>
													<li><a href="product-details.html">Product Types</a>
														<ul>
															<li><a href="product-details.html">Simple Product</a></li>
															<li><a href="product-details.html">Variables Product</a></li>
															<li><a href="product-details.html">Grouped Product</a></li>
															<li><a href="product-details.html">Downloadable</a></li>
															<li><a href="product-details.html">Virtual Product</a></li>
															<li><a href="product-details.html">External Product</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Pages</a>
												<ul>
													<li><a href="shop-grid.html">Shop Grid</a></li>
													<li><a href="shop-list.html">Shop List</a></li>
													<li><a href="product-details.html">Product Details</a></li>
													<li><a href="contact-us.html">Contact Us</a></li>
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="cart.html">Shopping cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="404.html">404 Error</a></li>
												</ul>													
											</li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>						
							</div>
						</div>
						<!-- mobile menu end -->
					</div>
					<!-- mainmenu area end -->
					<!-- top details area start -->
					<div class="col-md-3 col-sm-12 nopadding-left" style="display: flex">
						<div style="width:62%;padding: 35px 0px;white-space: nowrap;overflow: hidden">
							@if(Auth::check())			
								<span class="label label-primary" style="font-size:12px"><b>Xin chào: {{Auth::user()->name}}</b></span>
							@endif
						</div>
						<div class="top-detail" style="width:38%">
							<!-- language division start -->
							{{-- <div class="disflow">
								<div class="expand lang-all disflow">
									<a href="#"><img src="img/country/en.gif" alt="">English</a>
									<ul class="restrain language">
										<li><a href="#"><img src="img/country/it.gif" alt="">italiano</a></li>
										<li><a href="#"><img src="img/country/nl_nl.gif" alt="">Nederlands</a></li>
										<li><a href="#"><img src="img/country/de_de.gif" alt="">Deutsch</a></li>
										<li><a href="#"><img src="img/country/en.gif" alt="">English</a></li>
									</ul>
								</div>
								<div class="expand lang-all disflow">
									<a href="#">$ USD</a>
									<ul class="restrain language">
										<li><a href="#">€ Eur</a></li>
										<li><a href="#">$ USD</a></li>
										<li><a href="#">£ GBP</a></li>
									</ul>
								</div>
							</div> --}}
							<!-- language division end -->
							<!-- addcart top start -->
							<div class="disflow">
								<div class="circle-shopping expand">
									<div class="shopping-carts text-right">
										<div class="cart-toggler">
											<a href="{{route('get.list.shopping.cart')}}"><i class="icon-bag"></i></a>
											<a href="{{route('get.list.shopping.cart')}}"><span class="cart-quantity">{{\Cart::count()}}</span></a>
										</div>
										{{-- <div class="restrain small-cart-content">
											<ul class="cart-list">
												<li>
													<a class="sm-cart-product" href="product-details.html">
														<img src="{{asset('img/products/sm-products/cart1.jpg')}}" alt="">
													</a>
													<div class="small-cart-detail">
														<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
														<a href="#" class="edit-btn"><img src="{{asset('img/btn_edit.gif')}}" alt="Edit Button" /></a>
														<a class="small-cart-name" href="product-details.html">Voluptas nulla</a>
														<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
													</div>
												</li>
												<li>
													<a class="sm-cart-product" href="product-details.html">
														<img src="{{asset('img/products/sm-products/cart2.jpg')}}" alt="">
													</a>
													<div class="small-cart-detail">
														<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
														<a href="#" class="edit-btn"><img src="{{asset('img/btn_edit.gif')}}" alt="Edit Button" /></a>
														<a class="small-cart-name" href="product-details.html">Donec ac tempus</a>
														<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
													</div>
												</li>
											</ul>
											<p class="total">Subtotal: <span class="amount">$155.00</span></p>
											<p class="buttons">
												<a href="checkout.html" class="button">Checkout</a>
											</p>
										</div> --}}
									</div>
								</div>
							</div>
							<!-- addcart top start -->
							<!-- search divition start -->
							<div class="disflow">
								<div class="header-search expand">
									<div class="search-icon fa fa-search"></div>
									<div class="product-search restrain">
										<div class="container nopadding-right">
											<form action="{{route('get.product.searh')}}" id="searchform" method="get">
												@csrf
												<div class="input-group">
													<input type="text" name="key" class="form-control" maxlength="128"  value="{{\Request::get('key')}}" placeholder="Tìm kiếm sản phẩm">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- search divition end -->
							<div class="disflow">
								<div class="expand dropps-menu">
									<a href="#"><i class="fa fa-user"></i></a>
									<ul class="restrain language">
										@if(Auth::check())
									<li><a href="{{route('get.history.customer')}}">Nhật kí mua hàng</a></li>
									<li><a href="{{route('get.list.favorite.product')}}">Sản phẩm yêu thích</a></li>
										<li><a href="{{route('get.list.shopping.cart')}}">Giỏ hàng</a></li>
										<li><a href="{{route('get.logout')}}">Đăng xuất</a></li>
										@else
										<li><a href="#" id="modal_register">Đăng kí</a></li>
										
										<li><a href ="#" id="modal_login">Đăng nhập</a></li>
										{{-- <li><a href="{{route('get.login')}}">Đăng nhập</a></li> --}}
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- top details area end -->
				</div>
			</div>
			{{-- modal custom login --}}
			@if(session()->has('register_success'))
				<div id="check_success_register"></div>
			@endif
			<div id="exampleModal123" class="modal fade">
				<div class="modal-dialog modal-login">
					<div class="modal-content">
						<div class="modal-header">
							<div class="avatar" >
								{{-- <img src="{{asset('/login.png')}}" alt="Avatar"> --}}
							</div>				
							<h4 class="modal-title">Đăng nhập</h4>	
							  	<div id="alert_login_customer" class="alert alert-warning alert-dismissible" role="alert" style="display: none">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Sai tài khoản hoặc mật khẩu !</strong> Bạn đã nhập sai tài khoản và mật khẩu xin kiểm tra lại !!!
								  </div>
								  @if(session()->has('register_success'))
								  <div  class="alert alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <strong>Thành công!</strong> Bạn đã đăng kí tài khoản người dùng thành công xin mời đăng nhập !!!
								  </div>
								  @endif
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<form action="{{route('post.login')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="text" class="form-control" id="email_login_customer" name="email" placeholder="Tên tài khoản..." required="required">		
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password_login_customer" name="password" placeholder="Mật khẩu..." required="required">	
								</div>        
								<div class="form-group">
									<button type="submit" id="button_login_customer" class="btn btn-primary btn-lg btn-block login-btn">Đăng nhập</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<a href="#">Quên mật khẩu?</a>
						</div>
					</div>
				</div>
			</div>     
			{{-- end modal custom login --}}
			{{--modal cusom register --}}
			@if($errors->any())
				<div id="check_error_register"></div>
			@endif
			
		  <div class="modal fade" id="modalRegisterForm" role="dialog">
			<div class="modal-dialog modal-sm-5">
			  <div class="modal-content">
				<div class="modal-header text-center">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title w-100 font-weight-bold">Đăng kí thành viên</h4>
				</div>
				<div class="modal-body">
						@if ($errors->any())
						<div class="alert alert-danger col-sm-10 col-sm-offset-1">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					<form method="POST" class="col-sm-10 col-sm-offset-1" action="{{route('post.register')}}">
						@csrf
						<div class="form-group">
							<label>Họ và tên của bạn: </label>
							<input type="text" name="name" class="form-control" />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" />
						</div>
						<div class="form-group">
							<label>Số diện thoại</label>
							<input type="text" name="phone" class="form-control" />
						</div>
						<center>
						<input type="submit" class="btn btn-primary" value="Đăng ký">&nbsp
						<a href="#" class="btn btn-danger" id="modal_cancle_register">Hủy</a>
						</center>
					</form>
					<div style="clear:both"></div>
				</div>
			  </div>
			</div>
		  </div>
		{{-- end cusom register --}}
		</header>