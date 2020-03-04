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
								<li class="category3"><span>Đăng nhập</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="customer-login-area" style="margin:0 auto">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12" style="position: relative;top: 50%;left: 50%;transform: translate(-50%, 0);">
						<div class="customer-login my-account">
							<form method="post" class="login">
                            @csrf
								<div class="form-fields" style="border-radius: 10px;">
									<h2>Đăng nhập</h2>
									<p class="form-row form-row-wide">
										<label for="username">Email <span class="required">*</span></label>
										<input type="text" class="input-text" name="email" id="username" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password">
									</p>
								</div>
								<div class="form-action">
									<p class="lost_password"> <a href="#">Lost your password?</a></p>
									<div class="actions-log">
										<input type="submit" class="btn" style="background: #3300ff;" name="login" value="Login">
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