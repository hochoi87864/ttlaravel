@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
    <li class="breadcrumb-item active" aria-current="page">Cập nhật tin tức</li>
    </ol>
</div>
<div class="col-sm-10 mx-auto">
    <form action="" method="POST" enctype="multipart/form-data">
        @if (count($errors)>0)
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">
                    {{$err}}<br/>
                </div>
            @endforeach
        @endif         
        @csrf
    @include('admin::article.form')
    </form>
</div>
@endsection