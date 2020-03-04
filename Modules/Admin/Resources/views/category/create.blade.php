@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
    <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
    </ol>
</div>
<div class="col-sm-10 mx-auto">
    <form action="" method="POST">
        @if (count($errors)>0)
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">
                    {{$err}}<br/>
                </div>
            @endforeach
        @endif         
        @csrf
    @include('admin::category.form')
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
    </form>
</div>
@endsection