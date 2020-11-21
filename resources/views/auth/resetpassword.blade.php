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
                    <li class="category3"><span>Lấy mật khẩu</span></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <form class=" col-md-6 col-md-offset-2" action="" method="POST">
        @if(session()->has('notExist'))
        <div class="alert alert-danger">
            <strong>Thất bại!</strong> Không tồn tại email này.
          </div>
        @endif
        @if(session()->has('Success'))
        <div class="alert alert-success">
            <strong>Thành công !</strong> Kiểm tra email của bạn.
          </div>
        @endif
        @csrf
        <div class="form-group">
            <label>Nhập Email cần lấy mật khẩu: </label>
            <input type="text" style="width:600px;" name="email" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Lấy lại mật khẩu" class="btn btn-primary mt-5"/>
        </div>
    </form>
</div>  
@endsection