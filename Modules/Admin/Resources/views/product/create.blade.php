@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
    <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
    </ol>
</div>
<div class="col-sm-11 mx-auto">
    <form action="" method="POST" enctype="multipart/form-data">
        @if (count($errors)>0)
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">
                    {{$err}}<br/>
                </div>
            @endforeach
        @endif         
        @csrf
    @include('admin::product.form')
    
    </form>
</div>
@endsection