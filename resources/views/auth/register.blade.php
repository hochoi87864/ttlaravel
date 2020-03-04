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
								<li class="category3"><span>Đăng kí</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="customer-login-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12" style="position: relative;top: 50%;left: 50%;transform: translate(-50%, 0);">
						<div class="customer-login my-account">
							<form method="post" class="login" >
                            @csrf
								<div class="form-fields" style="border-radius: 10px;">
									<h2>Đăng ký</h2>
									<p class="form-row form-row-wide">
										<label for="username">Tên <span class="required">*</span></label>
										<input type="text" class="input-text" name="username" id="username" value="">
									</p>
                                    <p class="form-row form-row-wide">
										<label for="email">Email <span class="required">*</span></label>
										<input type="text" class="input-text" name="email" id="username" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password">
									</p>
                                    <p class="form-row form-row-wide">
										<label for="phone">Số điện thoại <span class="required">*</span></label>
										<input type="text" class="input-text" name="phone" id="username" value="">
									</p>
								</div>
								<div class="form-action">
									
									<div class="actions-log">
										<input type="submit" class="btn" name="login" value="Đăng kí">
									</div>
									<label for="rememberme" class="inline"> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection